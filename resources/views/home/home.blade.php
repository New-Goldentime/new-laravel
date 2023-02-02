@extends('layouts.app')
@section('content')
<body class="drawer drawer--right">
    <div id="header"></div>
    <div class="wrapper">
        <div id="main">
            <div class="container">
                <div class="search_form">
                    <div class="search-box">
                        <h3>詳細条件で探す</h3>
                        <div class="search-flexs">
                            <form action="">
                                <div class="search-flex">
                                    <div class="search-flex-content">
                                        <input type="date" name="" id="">~<input type="date" name="" id="">
                                    </div>
                                    <div class="search-flex-content">
                                        <select name="pref" id="pref"></select>
                                        <select name="city" id="city">
                                            <option value="">市区町村で絞り込む</option>
                                        </select>
                                    </div>
                                    <div class="search-flex-content">
                                        <h4>枚数単価</h4>
                                        <input type="number" name="" id="">~<input type="number" name="" id="">
                                    </div>
                                    <div class="search-flex-content">
                                        <h4>報酬金額</h4>
                                        <input type="number" name="" id="">~<input type="number" name="" id="">
                                    </div>
                                </div>
                                <div class="search-submit">
                                    <input type="submit" name="submit" value="検索">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="search-form">
                        <form action="" method="">
                            <input id="sbox" id="s" name="s" type="text" placeholder="フリーワードを入力" />
                            <input id="sbtn" type="submit" value="検索" />
                        </form>
                        <a href="">+条件指定</a>
                    </div>
                    <div class="search-conditions">
                        <a href="" class="keep pc">保存した検索条件▶︎</a>
                        <a href="" class="keep sp">保存した検索条件▼</a>
                        <ul>
                            <li><a href="">西宮 10000~15000</a></li>
                        </ul>
                    </div>
                    <div class="search-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.2584683726404!2d139.7697996509681!3d35.67063723806276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf28cd5a869%3A0x356c71478c41f867!2z5Lit5aSu5Yy65b255omA!5e0!3m2!1sja!2sjp!4v1657460176546!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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