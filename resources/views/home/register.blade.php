<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="index,follow">
    <title>ポスナビ</title>
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
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script>
        $(function () {
            $("#header").load("../common/header.html");
            $("#side").load("../common/side.html");
            $("#footer").load("../common/footer.html");
        });

        // const phone = document.getElementById('phone_number');
        // const number = document.getElementById('phone');
        // number = phone;

        window.addEventListener('DOMContentLoaded', function () {
            let btn_passview01 = document.getElementById("btn_passview01");
            let input_pass01 = document.getElementById("input_pass01");
            let btn_passview02 = document.getElementById("btn_passview02");
            let input_pass02 = document.getElementById("input_pass02");
            btn_passview01.addEventListener("click", (e) => {
                e.preventDefault();
                if (input_pass01.type === 'password') {
                    input_pass01.type = 'text';
                    btn_passview01.textContent = '非表示';
                } else {
                    input_pass01.type = 'password';
                    btn_passview01.textContent = '表示';
                }
            });
            btn_passview02.addEventListener("click", (e) => {
                e.preventDefault();
                if (input_pass02.type === 'password') {
                    input_pass02.type = 'text';
                    btn_passview02.textContent = '非表示';
                } else {
                    input_pass02.type = 'password';
                    btn_passview02.textContent = '表示';
                }
            });
        });

        function CheckPassword(confirm) {
            var input1 = input_pass01.value;
            var input2 = input_pass02.value;
            if (input1 != input2) {
                confirm.setCustomValidity("入力値が一致しません。");
            } else {
                confirm.setCustomValidity('');
            }
        }

        $(function () {
            $('#submit_button').click(function () {
                $('#modalArea').fadeIn();
            });
            $('#closeModal , #modalBg').click(function () {
                $('#modalArea').fadeOut();
            });
        });
    </script>
</head>
@extends('layouts.app')

@section('content')
        <body class="drawer drawer--right entry">
            <div id="header"></div>
                <div class="wrapper">
                    <form method="POST" action="{{ url('/registerclient')}}">
                        @csrf
                        <div id="main">
                            <div class="container">
                                <div class="entry-form">
                                    <ul class="entry-flow">
                                        <li class="flow-current">❶会員登録</li>
                                        <li>❷登録完了</li>
                                        <li>❸認証完了</li>
                                    </ul>
                                </div>
                                <div class="entry-form">
                                    <table class="contact-table">
                                        
                                        {{-- <tr>
                                            <th class="contact-item">{{__('氏名(漢字)')}}<span>必須</span></th>
                                            <td class="contact-body">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="contact-item">{{__('氏名(フリガナ)')}}<span>必須</span></th>
                                            <td class="contact-body">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name_hira" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name_hira')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="contact-item">性別<span>必須</span></th>
                                            <td class="contact-body">
                                                <label class="contact-sex">
                                                    <input type="radio" name="sex" required="true" >
                                                    <span class="contact-sex-txt">男</span>
                                                </label>
                                                <label class="contact-sex">
                                                    <input type="radio" name="sex" required="true" >
                                                    <span class="contact-sex-txt">女</span>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="contact-item">生年月日<span>必須</span></th>
                                            <td class="contact-body">
                                                <input type="text" name="birth" class="form-text" placeholder="1900/01/01" required />
                                                @error('birth')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="contact-item">住所<span>必須</span></th>
                                            <td class="contact-body address-body">
                                                <span>〒</span><input type="text" name="zip01" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" required placeholder="">
                                                <input type="text" name="pref01" size="20" required>
                                                <input type="text" name="addr01" size="60">
                                                @error('zip01&&pref01&&addr01')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="contact-item">電話<span>必須</span></th>
                                            <td class="contact-body">
                                                <input type="text" name="phone_number"  id="phone_number" value="{{ old('phone_number') }}" required />
                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <script>
                                                    let phone = document.getElementById('phone_number');
                                                </script>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="contact-item">職業<span>必須</span></th>
                                            <td class="contact-body">
                                                <select name="occupation" class="form-select">
                                                    <option >選択</option>
                                                    <option>学生</option>
                                                    <option>フリーター</option>
                                                    <option>主婦</option>
                                                    <option>会社員</option>
                                                    <option>自営業</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="contact-item">メール設定</th>
                                            <td class="contact-body">
                                                <label class="contact-skill">
                                                <input type="radio" name="email_setting" required="true" >
                                                    <span class="contact-skill-txt">お知らせメールを受信する</span>
                                                </label>
                                                <label class="contact-skill">
                                                <input type="radio" name="email_setting" required="true" >
                                                    <span class="contact-skill-txt">メールマガジンを受信する</span>
                                                </label>
                                            </td>
                                        </tr> --}}
                                        <tr>
                                            <th class="contact-item">ログイン情報<span>必須</span></th>

                                            <td class="contact-body">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>

                                        {{-- <tr>
                                            <th class="contact-item">{{__('パスワード')}}</th>

                                            <td class="contact-body">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="contact-item">{{__('パスワード(確認用)')}}</th>
                                            <td class="contact-body">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </td>
                                        </tr> --}}
                                    </table>
                                    <div class="agree-link">
                                        <p>
                                            <a href="">利用規約</a>と「<a href="">個人情報取り扱いについて</a>」に同意して
                                        </p>
                                    </div>
                                        <input class="contact-submit" type="submit" value="配布員登録" id="submit_button" />
                                </div>
                            </div>
                        </div>
                    </form>

                    <section id="modalArea" class="modalArea" style="display: none;">
                            <div id="modalBg" class="modalBg"></div>
                            <div class="modalWrapper">
                                <div class="modalContents">
                                    <div class="modal-text">
                                        <div class="modal-flex">
                                            <div class="modal-flex-img">
                                                <img src="../../img/common/number_entry.png" alt="" data-xblocker="passed" style="visibility: visible;">
                                            </div>
                                            <div class="modal-flex-num">
                                                {{-- <input type="text" id="phone" class="form-control"> --}}
                                            </div>
                                        </div>
                                        <p>
                                            入力した情報で会員登録します。<br>
                                            会員登録完了と同時に、この電話番号に認証番号をショートメールでお送りします。<br>
                                            以下のボタンから認証をお願いします。
                                        </p>
                                    </div>
                                    <input class="contact-submit" type="submit" value="認証登録">
                                </div>
                                <div id="closeModal" class="closeModal">
                                    ×
                                </div>
                            </div>
                        </section>
                </div>
                <div id="footer"></div>
                <script src="../../assets/js/common.js?"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js"></script>
                <script src="../../assets/js/slick.min.js"></script>
        </body>
@endsection