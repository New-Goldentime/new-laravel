@extends('layouts.app')
@section('content')
<body class="drawer drawer--right entry">
    <div id="header"></div>
    <div class="wrapper">
        <div id="main">
            <div class="container">
                <div class="login_form">
                    <img src="{{asset('img/common/logo.svg')}}">
                    <div class="login-box">
                        <h2>ログインページ</h2>
                        <form method="POST" action="{{ url('/login') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="メールアドレスまたはユーザー名" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="パスワード" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                        </button>
                        <a href="" class="line-btn">LINE認証</a>
                    </form>
                    </div>
                    <div class="forget-link">
                        <a href="{{ route('password.request') }}">パスワードを忘れた方はこちら</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer"></div>
    <script src="../../assets/js/common.js?"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
    <script src="../../assets/js/slick.min.js"></script>
</body>
@endsection
