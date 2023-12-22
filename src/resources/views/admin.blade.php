@extends('layouts')

@section('css')
<link rel="stylesheet" href="{{ asset(css/admin.css) }}">
@endsection

@section('content')
<div class="adimin-form__content">
    <div class="admin-form__heading">
        <h2>Admin</h2>
    </div>

    <div class="admin-form__search">
        <div></div>
    </div>
</div>
@endsection