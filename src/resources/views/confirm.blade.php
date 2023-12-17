@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
    <form class="form">
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="text" name="name" value="" />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="" />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="text" name="" value="" />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="text" name="" value="" />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="text" name="" value="" />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="text" name="" value="" />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="text" name="" value="" />
                    </td>
                </tr>

                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <input type="text" name="" value="" />
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
</div>

<p>確認ページ</p>
<div class="">
    <button class="" type="submit">送信</button>
</div>
@endsection