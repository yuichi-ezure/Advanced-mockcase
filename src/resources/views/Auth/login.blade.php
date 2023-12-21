@extends('layouts.app')

@section('main')
    <div class="login">
    <p class="login-ttl">Login</p>
    <form  action="/login" method="post">
        @csrf
        <!--<span class="icon"><img src="src/img/email-icon.jpeg" alt="email-icon"></span>-->
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
        <div class="form__button">
            <input class="login-btn" type="submit" value="ログイン" >
        </div>
    </form>
</div>
@endsection
