@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section
<header class="header__button">
    <div class="header__button">
        <button class="header__button-submit">register</button>
    </div>
</header>

<div class="login-form__content">
    <div class="login-form__heading">
        <h2>Login</h2>
    </div>

    <form class="form">
        <div class="login__group">
            <div class="login__group-title">
                <p>メールアドレス</p>
            </div>
            <div class="login__group-item">
                <input type="text" name="email" placeholder="例:test@example.com">
            </div>

            <div class="login__group-title">
                <p>パスワード</p>
            </div>
            <div class="login__group-item">
                <input type="text" name="password" placeholder="例:coachtechno6">
            </div>
        </div>

        <div class="form__button">
            <button class="form__button-submit">ログイン</button>
        </div>
    </form>
</div>
@endsection