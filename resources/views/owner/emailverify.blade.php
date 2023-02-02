@extends('layouts.app')

@section('content')
    <body class="drawer drawer--right entry">
        <div class="wrapper">
            <div id="main">
                <div class="container">
                    <div class="entry-title">
                        <h2>会員登録(無料)</h2>
                    </div>
                    <div class="entry-form">
                        <form method="POST" action="{{ url('owner/register') }}">
                            <div class="email-form">
                                <p>ログインID（メールアドレス)</p>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="メールアドレスを入力" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit">配布員登録する</button>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
        <script src="../../assets/js/common.js?"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
        <script src="../../assets/js/slick.min.js"></script>
    </body>
@endsection
