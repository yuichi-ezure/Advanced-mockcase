<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="reserve-container">
    <header class="header">
        <h1 class="header-ttl">Rese</h1>
    </header>
    <main class="main">
    <div class="shopdata">
        <input type="submit" value="<">
        <h2 class="shop">店名</h2>
        <img class="shopphoto" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="image1">
        <p class="shoparea-detail">#エリア1</p>
        <p class="shopgenre-detail">#ジャンル1</p>
        <p class="shopdesc">料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。</p>
    </div>
    <div class="shopreserve">
        <p class="reservettl">予約</p>
        <input class="datepick" type="date" id="datePicker">
        <select class="timepick" id="timePicker">
            <option value="09:00">09:00</option>
            <option value="09:30">09:30</option>
            <option value="10:00">10:00</option>
            <option value="10:30">10:30</option>
            <option value="11:00">11:00</option>
            <option value="11:30">11:30</option>
            <option value="12:00">12:00</option>
            <option value="12:30">12:30</option>
            <option value="13:00">13:00</option>
            <option value="13:30">13:30</option>
            <option value="14:00">14:00</option>
            <option value="14:30">14:30</option>
            <option value="15:00">15:00</option>
            <option value="15:30">15:30</option>
            <option value="16:00">16:00</option>
            <option value="16:30">16:30</option>
            <option value="17:00">17:00</option>
            <option value="17:30">17:30</option>
            <option value="18:00">18:00</option>
            <option value="18:30">18:30</option>
            <option value="19:00">19:00</option>
            <option value="19:30">19:30</option>
            <option value="20:00">20:00</option>
            <option value="20:30">20:30</option>
            <option value="21:00">21:00</option>
            <option value="21:30">21:30</option>
            <option value="22:00">22:00</option>
            <option value="22:30">22:30</option>
            <option value="23:00">23:00</option>
            <option value="23:30">23:30</option>
        </select>
        <select class="numbercount" id="peopleCount">
            <option value="1">1人</option>
            <option value="2">2人</option>
            <option value="3">3人</option>
            <option value="4">4人</option>
            <option value="5">5人</option>
            <option value="6">6人</option>
            <option value="7">7人</option>
            <option value="8">8人</option>
            <option value="9">9人</option>
            <option value="10">10人</option>
            <option value="11">11人</option>
            <option value="12">12人</option>
        </select>
        <table class="reservate-detail">
            <tr>
                <th>Shop</th>
                <td class="name">店名</td>
            </tr>
            <tr>
                <th>Date</th>
                <td class="date">yyyy-mm-dd</td>
            </tr>
            <tr>
                <th>Time</th>
                <td class="time">hh:mm</td>
            </tr>
            <tr>
                <th>Number</th>
                <td class="number">●人</td>
            </tr>
        </table>
        <input class="reservate-btn" type="submit" value="予約する">
    </div>
    </main>
</body>