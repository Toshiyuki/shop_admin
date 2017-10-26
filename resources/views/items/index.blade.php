@extends('layouts.default')

@section('title', 'ショップ公開商品の編集')

@section('content')
<h2>
  <a href="{{ url('/items/create') }}" class="pull-right fs12">商品追加</a>
  ショップ公開商品の編集
</h2>
<!-- <ul>
  @forelse ($items as $item)
  <li>
    <a href="{{ action('ItemsController@show', $item->id) }}">{{ $item->name }}</a>
    <a href="{{ action('ItemsController@edit', $item->id) }}" class="fs12">[Edit]</a>
    <form action="{{ action('ItemsController@destroy', $item->id) }}" id="form_{{ $item->id }}" method="post" style="display:inline">
      {{ csrf_field() }}
      {{ method_field('delete') }}
      <a href="#" data-id="{{ $item->id }}" onclick="deletePost(this);" class="fs12">[x]</a>
    </form>
  </li>
  @empty
  <li>アイテムがありません</li>
  @endforelse
</ul> -->

<table class="table table-condensed">
  <tr>
    <th>ID</th><th>編集</th><th>商品</th><th>アーティスト</th><th>画像ファイル</th><th>価格</th><th>削除</th>
  </tr>
  @forelse ($items as $item)
  <tr>
    <td>
      {{ $item->id }}
    </td>
    <td>
      <a href="{{ action('ItemsController@edit', $item->id) }}" class="fs12">[編集]</a>
    </td>
    <td>
      {{ $item->name }}
    </td>
    <td>
      {{ $item->artist }}
    </td>
    <td>
      {{ $item->img }}
    </td>
    <td>
      {{ $item->price }}
    </td>
    <td>
      <form action="{{ action('ItemsController@destroy', $item->id) }}" id="form_{{ $item->id }}" method="post" style="display:inline">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <a href="#" data-id="{{ $item->id }}" onclick="deletePost(this);" class="fs12">[削除]</a>
      </form>
    </td>
  </tr>
  @empty
  <tr><td colspan="7">アイテムがありません</td></tr>
  @endforelse
</table>

<script>
function deletePost(e) {
  'use strict';

  if (confirm('削除します。よろしいですか？')) {
    document.getElementById('form_' + e.dataset.id).submit();
  }
}
</script>
@endsection
