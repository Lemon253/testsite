<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>free_market</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                フリマ
            </a>
            <!-- リンクの調整中 -->
            <nav>
                <ul class="header-nav">
                    @if (Auth::check())
                    <li class="header-nav__item">
                        <a href="/mypage" class="header-nav__link">マイページ</a>
                    </li>
                    <li class="header-nav__item">
                        <form class="form" action="/logout" method="post">
                            @csrf
                            <button class="header-nav__button">ログアウト</button>
                        </form>
                    </li>
                    @else
                    <li class="header-nav__item">
                        <a href="/login" class="header-nav__link">ログイン</a>
                    </li>
                    <li class="header-nav__item">
                        <a href="/register" class="header-nav__link">会員登録</a>
                    </li>
                    @endif
                    <li class="header-nav__item">
                        <!-- 出品ページを作ってaタグのリンクを変更 -->
                        <a href="/create" class="header-nav__link--sell">出品</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>