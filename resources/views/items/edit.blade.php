@extends('layouts.default')

@section('title', '商品修正')

@section('content')
<h2>
  <a href="{{ url('/') }}" class="pull-right fs12">戻る</a>
  商品修正
</h2>
<form method="post" action="{{ url('/items', $item->id) }}">
  {{ csrf_field() }}
  {{ method_field('patch') }}
  <table class="table table-condensed">
  <tr>
    <td>
      コード番号
    </td>
    <td>
    <input type="text" class="form-control" name="code" placeholder="コード番号" value="{{ old('code', $item->code) }}">
    @if ($errors->has('code'))
    <span class="error">{{ $errors->first('code') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
    商品名
    </td>
    <td>
    <input type="text" class="form-control" name="name" placeholder="商品名" value="{{ old('name', $item->name) }}">
    @if ($errors->has('name'))
    <span class="error">{{ $errors->first('name') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      省略名
    </td>
    <td>
    <input type="text" class="form-control" name="abname" placeholder="省略名" value="{{ old('abname', $item->abname) }}">
    @if ($errors->has('abname'))
    <span class="error">{{ $errors->first('abname') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      商品画像
    </td>
    <td>
    <input type="text" class="form-control" name="img" placeholder="商品画像" value="{{ old('img', $item->img) }}">
    @if ($errors->has('img'))
    <span class="error">{{ $errors->first('img') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      アーティスト名
    </td>
    <td>
    <input type="text" class="form-control" name="artist" placeholder="アーティスト名" value="{{ old('artist', $item->artist) }}">
    @if ($errors->has('artist'))
    <span class="error">{{ $errors->first('artist') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      価格
    </td>
    <td>
    <input type="text" class="form-control" name="price" placeholder="価格" value="{{ old('price', $item->price) }}">
    @if ($errors->has('price'))
    <span class="error">{{ $errors->first('price') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      商品説明
    </td>
    <td>
    <textarea name="expl" class="form-control" rows="8" cols="40" placeholder="商品説明">{{ old('expl', $item->expl) }}</textarea>
    @if ($errors->has('expl'))
    <span class="error">{{ $errors->first('expl') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      商品詳細
    </td>
    <td>
    <input type="text" class="form-control" name="detail" placeholder="商品詳細" value="{{ old('detail', $item->detail) }}">
    @if ($errors->has('detail'))
    <span class="error">{{ $errors->first('detail') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      収録楽曲
    </td>
    <td>
    <textarea name="records" class="form-control" rows="8" cols="40" placeholder="収録楽曲">{{ old('records', $item->records) }}</textarea>
    @if ($errors->has('records'))
    <span class="error">{{ $errors->first('records') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      在庫数
    </td>
    <td>
    <input type="text" class="form-control" name="amounts" placeholder="在庫数" value="{{ old('amounts', $item->amounts) }}">
    @if ($errors->has('amounts'))
    <span class="error">{{ $errors->first('amounts') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      送料
    </td>
    <td>
    <input type="text" class="form-control" name="postage" placeholder="送料" value="{{ old('postage', $item->postage) }}">
    @if ($errors->has('postage'))
    <span class="error">{{ $errors->first('postage') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      一回のオーダー制限
    </td>
    <td>
    <input type="text" class="form-control" name="orderlimit" placeholder="一回のオーダー制限" value="{{ old('orderlimit', $item->orderlimit) }}">
    @if ($errors->has('orderlimit'))
    <span class="error">{{ $errors->first('orderlimit') }}</span>
    @endif
    </td>
  </tr>
  <tr>
    <td>
      カテゴリー
    </td>
    <td>
    <input type="text" class="form-control" name="category" placeholder="カテゴリー" value="{{ old('category', $item->category) }}">
    @if ($errors->has('category'))
    <span class="error">{{ $errors->first('category') }}</span>
    @endif
    </td>
</tr>
 <table>
 <p>
   <input type="submit" value="更新" class="btn btn-primary btn-lg btn-block">
 </p>
</form>
@endsection
