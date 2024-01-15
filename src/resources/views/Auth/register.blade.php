@extends('layouts.app')

@section('main')
<div class="register">
    <p class="register-ttl">Registration</p>
    <form action="/register" method="post">
        @csrf
        <div class="form-content">
            <input type="text" name="name" id="username" placeholder="Username" class="underline-input">
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        <div class="form-content">
            <input type="email" name="email" id="email" placeholder="Email" class="underline-input">
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        <div class="form-content">
            <input type="password" name="password" id="password" placeholder="Password" class="underline-input">
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
        <input type="submit" value="登録" class="register-btn">
    </form>
</div>
@endsection
