<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="index,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/reset.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/common.css?ver=">
    <link rel="stylesheet" type="text/css" href="../../assets/css/distributor.css?ver=">
    <link rel="stylesheet" type="text/css" href="../../assets/css/slick.css?ver=">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="../../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="../../assets/images/android-chrome.png">
    <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<header>
    <div class="entry-header">
        <div class="header-bar">
            <p>チラシを配ってほしい人と、配りたい人をマッチング - ポスティングナビ</p>
        </div>
        <div class="header-inner">
            <div class="header-logo">
                <h1>
                    <img src="../../img/common/logo.svg" alt="ポスナビ">
                </h1>
            </div>

            <div class="header-flex-btn">
                <div class="login-btn">
                    <a href="{{url('/login')}}">ログイン</a>
                </div>
                <div class="entry-btn">
                    <a href="{{ url('/register') }}">会員登録(無料)</a>
                </div>
            </div>
        </div>
    </div>
    <div class="basic">
        <div class="header-bar">
            <p>チラシを配ってほしい人と、配りたい人をマッチング - ポスティングナビ</p>
        </div>
        <div class="header-inner">
            <div class="header-logo">
                <h1>
                    <img src="../../img/common/logo.svg" alt="ポスナビ">
                </h1>
            </div>
            <div class="header-nav pc">
                <ul>
                    <li>
                        <a href="">
                            <img src="../../img/distributor/job.png" alt="">
                            <p>案件を探す</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../../img/distributor/wish.png" alt="">
                            <p>お気に入り</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../../img/distributor/task.png" alt="">
                            <p>タスク</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../../img/distributor/message.png" alt="">
                            <p>メッセージ</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../../img/distributor/people.png" alt="">
                            <p>マイページ</p>
                        </a>
                    </li>
                </ul>
                <div class="header-flex-btn">
                    <div class="change-btn">
                        <a href="">
                            <img src="../../img/distributor/change_business.svg" alt="">
                            <p>事業主モード</p>
                        </a>
                    </div>
                    <div class="logout-btn">
                        <a href="">ログアウト</a>
                    </div>
                </div>
            </div>
            <div class="header-nav sp">
                <div class="header-flex-btn">
                    <div class="change-btn smsp">
                        <a href="">
                            <img src="../../img/distributor/change_business.svg" alt="">
                            <p>事業主モード</p>
                        </a>
                    </div>
                    <div class="logout-btn">
                        <a href="">ログアウト</a>
                    </div>
                </div>
                <button type="button" class="drawer-toggle drawer-hamburger">
                    <span class="sr-only">toggle navigation</span>
                    <span class="drawer-hamburger-icon"></span>
                </button>
                <nav class="drawer-nav" role="navigation">
                    <ul class="drawer-menu">
                        <li>
                            <a href="">
                                <img src="../../img/distributor/job.png" alt="">
                                <p>案件を探す</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="../../img/distributor/wish.png" alt="">
                                <p>お気に入り</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="../../img/distributor/task.png" alt="">
                                <p>タスク</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="../../img/distributor/message.png" alt="">
                                <p>メッセージ</p>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="../../img/distributor/people.png" alt="">
                                <p>マイページ</p>
                            </a>
                        </li>
                    </ul>
                    <div class="header-flex-btn">
                        <div class="change-btn">
                            <a href="">
                                <img src="../../img/distributor/change_business.svg" alt="">
                                <p>事業主モード</p>
                            </a>
                        </div>
                        <div class="logout-btn">
                            <a href="">ログアウト</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
@yield('content')



