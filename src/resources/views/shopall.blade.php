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

<body class="container">
    <header class="header">
        <h1 class="header-ttl">Rese</h1>
        <div class="search-fields">
            <select name="area" id="area"></select>
            <select name="genre" id="genre"></select>
            <input type="text" name="shop_name" id="shop_name" placeholder="Search">
        </div>
    </header>
    <main class="main">
        <div class="shoplist">
            <div class="shopabout">
                <img class="shop-img" src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="ショップ画像1" style="width: 100%;">
                <h2 class="shopname">店舗名1</h2>
                <p class="shoparea">#エリア1</p>
                <p class="shopgenre">#ジャンル1</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名2</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名3</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名4</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名4</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名4</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名4</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名4</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名4</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名4</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
            <div class="shopabout">
                <img src="path_to_image2.jpg" alt="ショップ画像2">
                <h2 class="shopname">店舗名4</h2>
                <p class="shoparea">#エリア2</p>
                <p class="shopgenre">#ジャンル2</p>
                <div class="shopdetail">
                    <input type="submit" value="詳しく見る">
                    <button class="favorite-button">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
