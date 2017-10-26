@extends('layouts.default')

@section('title', '商品詳細')

@section('content')
<h2>
  <a href="{{ url('/') }}" class="pull-right fs12">Back</a>
  {{ $item->name }}
</h2>
<p>{!! nl2br(e($item->abname)) !!}</p>
<hr>
<p>{!! nl2br(e($item->code)) !!}</p>
<hr>
<p>{!! nl2br(e($item->artist)) !!}</p>
<hr>
<p>{!! nl2br(e($item->img)) !!}</p>
<hr>
<p>{!! nl2br(e($item->price)) !!}</p>
<hr>
<p>{!! nl2br(e($item->expl)) !!}</p>
<hr>
<p>{!! nl2br(e($item->detail)) !!}</p>
<hr>
<p>{!! nl2br(e($item->records)) !!}</p>
<hr>
<p>{!! nl2br(e($item->amounts)) !!}</p>
<hr>
<p>{!! nl2br(e($item->postage)) !!}</p>
<hr>
<p>{!! nl2br(e($item->orderlimit)) !!}</p>
<hr>
<p>{!! nl2br(e($item->category)) !!}</p>
<hr>
<p>{!! nl2br(e($item->shopid)) !!}</p>
@endsection
