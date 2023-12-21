<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="menu-container">
    <div class="menu1">
        <a href="/">Home</a>
        <a href="/login">Logout</a>
        <a href="/mypage">Mypage</a>
    </div>
    <div class="close-btn">
       <span></span>
       <span></span>
   </div>
</body>

