@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<header class="header__button">
    <div class="header__button">
        <button class="header__button-submit">login</button>
    </div>
</header>

<div class="login-form__content">
    <div class="login-form__heading">
        <h2>Register</h2>
    </div>

    <form class="form">
        <div class="login__group">
            <div class="login__group-title">
                <p>お名前</p>
            </div>
            <div class="login__group-item">
                <input type="text" name="name" placeholder="例:山田　太郎">
            </div>

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
                <button class="form__button-submit">登録</button>
            </div>
    </form>
</div>
@endsection