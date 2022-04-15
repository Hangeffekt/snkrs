@extends('welcome')

@section("title", "SNKRS")

@section("content")

















<div class="banana">
    <a  href="/wtb">
        <div   class="home_page_h2_div">
            <button type="button"   class="home_page_h2_button">Áruház</button>
        </div>
    </a>
</div>

<div class="banana_mobile">
        <div   class="home_page_h3_div">
            <a   class="home_page_h3_button">Áruház</a>
        </div>
</div>

<body   class="main_body">

    <div class="main_background">
        <div class="main_shape"></div>
        <div class="main_shape"></div>
    </div>

    <div class="main_background2">
        <div class="main_shape2"></div>
        <div class="main_shape2"></div>
    </div>

</body>








@endsection

<footer>
    <div class="home_also_bg_dark"></div>
        <div    class="kukac">
            <div    class="also_sav">
                <div    class="news_div">
                    <button type="button"   class="news_button">Hírek</button>
                </div>

                <div    class="wtb_div">
                    <a  href="SNKRS_WTB.html">
                        <button type="button"   class="wtb_button">wtb</button>
                    </a>
                </div>

                <div    class="wts_div">
                    <div    calss="dropup">
                        <a  href="SNKRS_WTS.html">
                            <button type="button"   class="wts_button">wts</button>
                        </a>
                        <div class="dropup_content">
                            <div    class="inline_dropup">
                                <h1 class="dropup_h1">Nike</h1>
                                <h1 class="dropup_h1">Jordan 1</h1>
                                <h1 class="dropup_h1">Yeezy</h1>
                                <h1 class="dropup_h1">Adidas</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div    class="wtt_div">
                    <a  href="SNKRS_WTT.html">
                        <button type="button"   class="wtt_button">wtt</button>
                    </a>
                </div>

                <div    class="legit_check_div">
                    <button type="button"   class="legit_check_button">Legit Check</button>
                </div>
            </div>
        </div>
    </div>
</footer>