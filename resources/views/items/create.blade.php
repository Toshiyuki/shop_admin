@extends('layouts.default')

@section('title', '商品追加')

@section('content')
<h2>
  <a href="{{ url('/') }}" class="pull-right fs12">戻る</a>
  商品追加
</h2>
<form method="post" action="{{url('/items')}}">
  {{ csrf_field() }}
  <p>
    <input type="text" class="form-control" name="code" placeholder="コード番号">
  </p>
  <p>
    <input type="text" class="form-control" name="name" placeholder="商品名" value="{{ old('name') }}">
    @if ($errors->has('name'))
    <span class="error">{{ $errors->first('name') }}</span>
    @endif
  </p>
  <p>
    <input type="text" class="form-control" name="abname" placeholder="省略名" value="{{ old('abname') }}">
    @if ($errors->has('abname'))
    <span class="error">{{ $errors->first('abname') }}</span>
    @endif
  </p>
  <p>
    <input type="text" class="form-control" name="artist" placeholder="アーティスト名" value="{{ old('artist') }}">
    @if ($errors->has('artist'))
    <span class="error">{{ $errors->first('artist') }}</span>
    @endif
  </p>
  <p>
    <input type="text" class="form-control" name="img" placeholder="商品画像" value="{{ old('img') }}">
    @if ($errors->has('img'))
    <span class="error">{{ $errors->first('img') }}</span>
    @endif
  </p>
  <p>
    <input type="text" class="form-control" name="price" placeholder="価格" value="{{ old('price') }}">
    @if ($errors->has('price'))
    <span class="error">{{ $errors->first('price') }}</span>
    @endif
  </p>
  <p>
    <textarea name="expl" class="form-control" rows="8" cols="40" placeholder="詳細">{{ old('expl') }}</textarea>
    @if ($errors->has('expl'))
    <span class="error">{{ $errors->first('expl') }}</span>
    @endif
  </p>
  <p>
    <input type="text" class="form-control" name="detail" placeholder="商品説明" value="{{ old('detail') }}">
    @if ($errors->has('detail'))
    <span class="error">{{ $errors->first('detail') }}</span>
    @endif
  </p>
  <p>
    <textarea name="records" class="form-control" rows="8" cols="40" placeholder="収録楽曲">{{ old('records') }}</textarea>
    @if ($errors->has('records'))
    <span class="error">{{ $errors->first('records') }}</span>
    @endif
  </p>
  <p>
    <input type="text" class="form-control" name="amounts" placeholder="在庫数" value="{{ old('amounts') }}">
    @if ($errors->has('amounts'))
    <span class="error">{{ $errors->first('amounts') }}</span>
    @endif
  </p>
  <p>
    <input type="text" class="form-control" name="postage" placeholder="送料" value="{{ old('postage') }}">
    @if ($errors->has('postage'))
    <span class="error">{{ $errors->first('postage') }}</span>
    @endif
  </p>
  <p>
    <input type="text" class="form-control" name="orderlimit" placeholder="一回のオーダー制限" value="{{ old('orderlimit') }}">
    @if ($errors->has('orderlimit'))
    <span class="error">{{ $errors->first('orderlimit') }}</span>
    @endif
  </p>
  <p>
    <input type="text" class="form-control" name="category" placeholder="カテゴリー" value="{{ old('category') }}">
    @if ($errors->has('category'))
    <span class="error">{{ $errors->first('category') }}</span>
    @endif
  </p>
  <p>
    <input type="submit" value="Add New" class="btn btn-primary btn-lg btn-block">
  </p>
</form>
@endsection
