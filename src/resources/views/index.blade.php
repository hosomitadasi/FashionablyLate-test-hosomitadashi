@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<p>問い合わせページ</p>
<div class="test__button">
    <button class="test__button-submit" type="submit">確認画面</button>
</div>
@endsection