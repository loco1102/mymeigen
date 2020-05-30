<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Scripts -->
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
        
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
            <div>
                <div class="header-title-area">
                    <h1 class="logo"><a href="/meigen/index"><img src="{{ asset('/images/meigen.png') }}" width="274" height="89" alt="名言サイト"></a></h1>
                </div>
            </div>
        </header>
        <div class="header-navigation">
            <ul>
                <li><a href="/meigen/index">Top</a></li>
                <li><a href="/meigen/search">検索</a></li>
                <li><a href="/meigen/new">新着</a></li>
            <!--    <li><a href="/meigen/ranking">ランキング</a></li> -->
            </ul>
        </div>
        <div class="container">
            <h1>@yield('page')</h1>
        </div>
        <div class="main">
            @yield('content')
        </div>
        <footer>
              <p class="copyright">(C) 2020 Meigen.</p>
        </footer>
    </body>
</html>