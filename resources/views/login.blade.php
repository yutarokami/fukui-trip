<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/b56d778a44.js" crossorigin="anonymous"></script>
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Unicase:wght@300;400;500;600;700&family=Inter:wght@500&family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login_header">
        <div class="top_title">
            <h1>ようこそ、</h1>
            <h1>FUKUI TRIPへ</h1>
        </div>
        <a href="/" class="close_btn">CLOSE</a>
    </div>

    <!-- ログイン部分のhtml -->
    <div class="login_group">
        <h2 class="login_title">登録済みの方はこちらからログイン</h2>
        <div class="icon_group">
            <div class="icon_group_top">
                <div class="icon_apple">
                    <i class="fa-brands fa-apple"></i>
                    <h4>Appleアカウント</h4>
                </div>
                <div class="icon_google">
                    <i class="fa-brands fa-google"></i>
                    <h4>Googleアカウント</h4>
                </div>
            </div>

            <div class="icon_group_bottom">
                <div class="icon_facebook">
                    <i class="fa-brands fa-facebook"></i>
                    <h4>Facebookアカウント</h4>
                </div>
                <div class="icon_twitter">
                    <i class="fa-brands fa-twitter"></i>
                    <h4>Twitterアカウント</h4>
                </div>
            </div>
        </div>

        <h2 class="login_title">メールアドレスでログイン</h2>
        <form class="form-login" method="POST" action="{{ route('login') }}">
            @csrf

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <x-alert type="danger" :session="session('login_error')"/>
            
            <x-alert type="danger" :session="session('logout')"/>

            <div class="email_box">
                <label for="email" class="email_title">メールアドレス</label>
                <input type="email" id="email" name="email" class="email_form" placeholder="メールアドレス" autofocus>
            </div>
            
            <div class="password_box">
                <label for="password" class="password_title">パスワード</label>
                <input type="password" id="password" name="password" class="password_form" placeholder="パスワード" autofocus>
            </div>
            <button class="login_button" type="submit">ログイン</button>
        </form>
    </div>

    <div class="line"></div>

    <!-- 新規登録部分のhtml -->
    <div class="signin_group">
        <h2 class="login_title">未登録の方はこちらから新規登録</h2>
        <div class="icon_group">
            <div class="icon_group_top">
                <div class="icon_apple">
                    <i class="fa-brands fa-apple"></i>
                    <h4>Appleアカウントで登録</h4>
                </div>
                <div class="icon_google">
                    <i class="fa-brands fa-google"></i>
                    <h4>Googleアカウントで登録</h4>
                </div>
            </div>

            <div class="icon_group_bottom">
                <div class="icon_facebook">
                    <i class="fa-brands fa-facebook"></i>
                    <h4>Facebookアカウントで登録</h4>
                </div>
                <div class="icon_twitter">
                    <i class="fa-brands fa-twitter"></i>
                    <h4>Twitterアカウントで登録</h4>
                </div>
            </div>
        </div>

        <h2 class="login_title">メールアドレスで登録</h2>
        <form class="form-login" method="POST" action="{{ route('login') }}">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- <div class="login_id_box">
                <label for="login_id" class="login_id_title">ログインID</label>
                <input type="login_id" id="login_id" name="login_id" class="login_id_form" placeholder="ログインID(半角英数字・3文字以上)※変更不可" autofocus>
            </div> -->

            <div class="email_box">
                <label for="email" class="email_title">メールアドレス</label>
                <input type="email" id="email" name="email" class="email_form" placeholder="メールアドレス" autofocus>
            </div>
            
            <div class="password_box">
                <label for="password" class="password_title">パスワード</label>
                <input type="password" id="password" name="password" class="password_form" placeholder="パスワード(半角英数字・8文字以上)" autofocus>
            </div>
            <button class="signin_button" type="submit">アカウント登録</button>
        </form>
        
    </div>

    <!-- <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
    <h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <x-alert type="danger" :session="session('login_error')"/>
    
    <x-alert type="danger" :session="session('logout')"/>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
    <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button> -->

</body>
</html>