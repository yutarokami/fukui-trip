<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ホーム画面</title>
    <link rel="stylesheet" href="css/login_menu.css">
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300;400;500;600;700&family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

</head>
<body>
    <div class="menu_header">
        <div class="header_title">
            <h1>ありがとうございます。</h1>
            <h1>{{ Auth::user()->name }}さん</h1>
        </div>
        <a href="/" class="close_btn">CLOSE</a>
    </div>

    <div class="menu_title_group">
        <a href="/search" class="menu_title">
            <div class="title">
                <h2 class="title_en">SEARCH</h2>
                <h2 class="title_ja">探す</h2>
            </div>
            <img src="\img\search.jpg">
        </a>
        <a href="/post" class="menu_title">
            <div class="title">
                <h2 class="title_en">POST</h2>
                <h2 class="title_ja">投稿する</h2>
            </div>
            <img src="\img\post.jpg">
        </a>
        <a href="/mypage" class="menu_title">
            <div class="title">
                <h2 class="title_en">MYPAGE</h2>
                <h2 class="title_ja">マイページ</h2>
            </div>
            <img src="\img\mypage.jpg">
        </a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="logout_button" >ログアウト</button>
        </form>

    </div>
    <!-- <div class="container">
        <div class="mt-5">
            @if (session('login_success'))
                <div class="alert alert-success">
                    {{ session('login_success') }}
                </div>
            @endif

            <h3>プロフィール</h3>
            <ul>
                <li>名前: {{ Auth::user()->name }}</li>
                <li>メールアドレス:: {{ Auth::user()->email }}</li>
            </ul>
        </div> -->

    </div>
</body>
</html>