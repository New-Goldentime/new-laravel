<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="index,follow">
    <title>ใในใใ</title>
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
                    btn_passview01.textContent = '้่กจ็คบ';
                } else {
                    input_pass01.type = 'password';
                    btn_passview01.textContent = '่กจ็คบ';
                }
            });
            btn_passview02.addEventListener("click", (e) => {
                e.preventDefault();
                if (input_pass02.type === 'password') {
                    input_pass02.type = 'text';
                    btn_passview02.textContent = '้่กจ็คบ';
                } else {
                    input_pass02.type = 'password';
                    btn_passview02.textContent = '่กจ็คบ';
                }
            });
        });

        function CheckPassword(confirm) {
            var input1 = input_pass01.value;
            var input2 = input_pass02.value;
            if (input1 != input2) {
                confirm.setCustomValidity("ๅฅๅๅคใไธ่ดใใพใใใ");
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
                                        <li class="flow-current">โถไผๅก็ป้ฒ</li>
                                        <li>โท็ป้ฒๅฎไบ</li>
                                        <li>โธ่ช่จผๅฎไบ</li>
                                    </ul>
                                </div>
                                <div class="entry-form">
                                    <table class="contact-table">
                                        
                                        {{-- <tr>
                                            <th class="contact-item">{{__('ๆฐๅ(ๆผขๅญ)')}}<span>ๅฟ้?</span></th>
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
                                            <th class="contact-item">{{__('ๆฐๅ(ใใชใฌใ)')}}<span>ๅฟ้?</span></th>
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
                                            <th class="contact-item">ๆงๅฅ<span>ๅฟ้?</span></th>
                                            <td class="contact-body">
                                                <label class="contact-sex">
                                                    <input type="radio" name="sex" required="true" >
                                                    <span class="contact-sex-txt">็ท</span>
                                                </label>
                                                <label class="contact-sex">
                                                    <input type="radio" name="sex" required="true" >
                                                    <span class="contact-sex-txt">ๅฅณ</span>
                                                </label>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th class="contact-item">็ๅนดๆๆฅ<span>ๅฟ้?</span></th>
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
                                            <th class="contact-item">ไฝๆ<span>ๅฟ้?</span></th>
                                            <td class="contact-body address-body">
                                                <span>ใ</span><input type="text" name="zip01" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');" required placeholder="">
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
                                            <th class="contact-item">้ป่ฉฑ<span>ๅฟ้?</span></th>
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
                                            <th class="contact-item">่ทๆฅญ<span>ๅฟ้?</span></th>
                                            <td class="contact-body">
                                                <select name="occupation" class="form-select">
                                                    <option >้ธๆ</option>
                                                    <option>ๅญฆ็</option>
                                                    <option>ใใชใผใฟใผ</option>
                                                    <option>ไธปๅฉฆ</option>
                                                    <option>ไผ็คพๅก</option>
                                                    <option>่ชๅถๆฅญ</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="contact-item">ใกใผใซ่จญๅฎ</th>
                                            <td class="contact-body">
                                                <label class="contact-skill">
                                                <input type="radio" name="email_setting" required="true" >
                                                    <span class="contact-skill-txt">ใ็ฅใใใกใผใซใๅไฟกใใ</span>
                                                </label>
                                                <label class="contact-skill">
                                                <input type="radio" name="email_setting" required="true" >
                                                    <span class="contact-skill-txt">ใกใผใซใใฌใธใณใๅไฟกใใ</span>
                                                </label>
                                            </td>
                                        </tr> --}}
                                        <tr>
                                            <th class="contact-item">ใญใฐใคใณๆๅ?ฑ<span>ๅฟ้?</span></th>

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
                                            <th class="contact-item">{{__('ใในใฏใผใ')}}</th>

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
                                            <th class="contact-item">{{__('ใในใฏใผใ(็ขบ่ช็จ)')}}</th>
                                            <td class="contact-body">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </td>
                                        </tr> --}}
                                    </table>
                                    <div class="agree-link">
                                        <p>
                                            <a href="">ๅฉ็จ่ฆ็ด</a>ใจใ<a href="">ๅไบบๆๅ?ฑๅใๆฑใใซใคใใฆ</a>ใใซๅๆใใฆ
                                        </p>
                                    </div>
                                        <input class="contact-submit" type="submit" value="้ๅธๅก็ป้ฒ" id="submit_button" />
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
                                            ๅฅๅใใๆๅ?ฑใงไผๅก็ป้ฒใใพใใ<br>
                                            ไผๅก็ป้ฒๅฎไบใจๅๆใซใใใฎ้ป่ฉฑ็ชๅทใซ่ช่จผ็ชๅทใใทใงใผใใกใผใซใงใ้ใใใพใใ<br>
                                            ไปฅไธใฎใใฟใณใใ่ช่จผใใ้กใใใพใใ
                                        </p>
                                    </div>
                                    <input class="contact-submit" type="submit" value="่ช่จผ็ป้ฒ">
                                </div>
                                <div id="closeModal" class="closeModal">
                                    ร
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