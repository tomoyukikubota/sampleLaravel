@extends('layouts.app')
@section('content')
@include('commons.errors')
<form action="{{ route('articles.store') }}" method="post">
 @include('articles.form')
 <button type="submit">投稿</button>
 <a href="{{ route('articles.index') }}">キャンセル</a>
</form>
@endsection()

<!--
  action属性 フォームの送信先となるURLを指定
  {{}} ← Blade特有の記法[エコー文]
  route()関数は、ルーティングに定義したルート名を使ってURLを生成
-->