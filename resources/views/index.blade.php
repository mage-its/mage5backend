<!DOCTYPE html>
<html>

<head>
    <title>Welcome | MAGE 5</title>
    <link rel="shorcut icon" href="{{asset("Image/favicon.ico")}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/styles1.css")}}">
    <script src="{{asset("js/particles.min.js")}}"></script>
    <meta name="description" content="
            Kompetisi IT terbesar di Indonesia untuk Pelajar dan Mahasiswa yang diselenggarakan oleh Mahasiswa Teknik Komputer FTE ITS Surabaya
            #MAGE5
            #RaisingANewWorld">
    <meta name="keywords" content="Kompetisi,IT,Olimpiade,ITS,Surabaya">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='https://ricostacruz.com/jquery.transit/jquery.transit.min.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>
</head>

<body style="background-color: black;">
    <div id="overlay">
        <div id="popup">
            <div id="close">X</div>
            <div class="container popke1">
                <div class="row">
                    <div class="col-lg-12 text-center">                        
                        <img id="congrat-popup" src="Image/popup/Asset1.png">                           
                    </div>
                </div>
                <div class="row" id="geserkiri">                    
                    <div class="col-lg-6 nopadding">
                        <div class="kotakPopup">
                            <div class="isiKotakPopup">                                                                
                                <div id="tulisanPopup">
                                    <span style="color: white;">
                                        <br>
                                        Kamu telah menjelajahi seluruh angkasa
                                        <br>
                                        dan menjadi yang terbaik.                                                                            
                                    </span>
                                    <br>
                                    <br>
                                    <span style="color:#00c2ba;">Selamat kepada: </span><br>                                
                                    <span style="color: #FF1D77; font-size: xx-large; font-weight: bolder;">Farid Cenreng</span><br>                                    
                                    <span style="color: #FF1D77;">Tim SDG - SMA ZION Makassar</span>
                                    <br>                                                                        
                                    <span style="color: white">
                                        <br>
                                        Penerima Freepass Teknik Komputer ITS 
                                        <br>
                                        2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 nopadding">
                        <img id="maskot-popup" src="Image/popup/maskot-lico.png">
                    </div>            
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div style="color: #FF1D77;; margin-top: 25px">Kamu akan mendapat surat pemberitahuan resmi dari 
                            <br>
                            Departemen Teknik Komputer ITS.</div>
                        <div style="color:white; margin-top: 15px;">Informasi lebih lanjut dapat menghubungi</div>
                        <div style="color:#00c2ba; margin-top: 5px;">0857-4260-9002 (Faishal)</div>
                    </div>
                </div>                
            </div>            
        </div>
    </div>
    <div class="barAtas">
        <div class="isi">
            <a class="tengahOther" href="/"><img id="logoTengah" src="{{asset("Image/logo-mage4.png")}}"></a>
            <nav class="navbar">
                <a class="nav-item dropdownnav-link dropdown-toggle isinavbar perisi" href="#" id="navbardrop"
                    data-toggle="dropdown">
                    Event
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#section2">Exhibition and Talkshow</a>
                    <a class="dropdown-item" href="/olim">Olimpiade</a>
                    <a class="dropdown-item" href="/devcom">Development Competition</a>
                    <a class="dropdown-item" href="/esport">E-Sport Competition</a>
                </div>
                <a class="isinavbar perisi" href="{{ route('login') }}"><b>Login</b></a>
            </nav>
        </div>
    </div>
    <div id="konten">
        <section class="section" id="section1"
            style="background:url({{asset("Image/bg_1.png")}}); background-size: 100% 100%;">
            <div id="particles"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 animated fadeInLeft">
                        <img src="{{asset("Image/logo-mage5.png")}}" id="logoMage-section1">
                    </div>
                    <div class="col-lg-8 col-sm-12 text-left">
                        <div id="tulisanMage-section1">
                            <div class="margin-check animated fadeInRight" id="tulisanMage-section2">
                                <img src="{{asset("Image/mage_title_white_shadow.png")}}" id="tulisanMage-section3">
                            </div>
                            <br>
                            <br>
                            <div class="animated fadeInUp" id="tulisanMage-section2 ">
                                "Raising a New World of Game and Technology Beyond Imagination"
                            </div>
                            <div class="animated fadeInUp">
                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_1.png")}}); background-size: cover;"
                                    onclick="location.href='#section2';">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section2-index" id="section2"
            style="background:url({{asset("Image/bg_2.png")}}); background-size: 100% 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="margin-check judulSection">EXHIBITION AND TALKSHOW</div>
                        <br>
                        <br>
                        <br>
                        <button class="btn-selengkap" style="background:url(&#39;Image/bt_1.png&#39;); background-size: cover; "onclick="location.href='/talkshowxworkshop'">Selengkapnya</button>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <a target="_blank" href=" https://youtu.be/X7UaP6QrZp4"><img src="{{asset("Image/bt_play_2.png")}}"
                            id="btn-play"></a>
                    <div class="col-lg-6 nopadding">
                        <img src="{{asset("Image/bg_talk.png")}}" id="fotoTalkshow">
                    </div>
                    <div class="col-lg-6 nopadding">
                        <div class="kotakTalkshow">
                            <div class="isiKotakTalkshow">
                                <br><br>
                                Exhibition and Talkshow adalah pameran karya finalis serta diskusi dengan narasumber
                                yang sangat inspiratif.
                                <br><br>
                                <div id="kutipan">
                                    <!--"Kutipan"-->
                                    <br><br>
                                    <div id="pembicara">
                                        <!--Pembicara-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="section" id="section3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="margin-check judulSection">DEVELOPMENT COMPETITION</div>
                        <br>
                        <br>
                        <button class="btn-selengkap"
                            style="background:url({{asset("Image/bt_1.png")}}); background-size: cover; "
                            onclick="location.href='/devcom'">Selengkapnya</button>
                    </div>
                </div>
                <div class="row" style="margin-top: 75px;">
                    <div class="col-sm-12 col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-app.png")}}" class="logo" id="logoApp">
                            <div class="isiKotak">
                                <b>Application </b>
                                <br>
                                Pelajar
                                <br>
                                Mahasiswa
                                <br>
                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "
                                    onclick="location.href='/signupDevcomp'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-game.png")}}" class="logo" id="logoGame">
                            <div class="isiKotak">
                                <b>Game</b>
                                <br>
                                Pelajar
                                <br>
                                Mahasiswa
                                <br>
                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "
                                    onclick="location.href='/signupDevcomp'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-iot.png")}}" class="logo" id="logoIOT">
                            <div class="isiKotak">
                                <b>Internet of Things</b>
                                <br>
                                Mahasiswa
                                <br>

                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "
                                    onclick="location.href='/signupDevcomp'">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="margin-check judulSection">OLIMPIADE</div>
                        <br>
                        <br>
                        <button class="btn-selengkap"
                            style="background:url({{asset("Image/bt_1.png")}}); background-size: cover; "
                            onclick="location.href='/olim'">Selengkapnya</button>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-olim.png")}}" id="logoOlimpiade" class="logo">
                            <div class="isiKotak">
                                <b>Olimpiade</b>
                                <br>
                                Pelajar
                                <br>
                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "
                                    onclick="location.href='/signupOlim'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8" style="margin-top: 5%;">
                        <div class="row">
                            <div class="col-lg-2">

                            </div>
                            <div class="col-lg-8">
                                Olimpiade MAGE 5 adalah kompetisi olimpiade untuk pelajar SMA/Sederajat di bidang
                                pemrograman, fisika, dan logika.
                            </div>
                            <div class="col-lg-2">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="kotakKecil">
                                    <div class="isiKotakKecil">
                                        <br><br>
                                        <h6><b>Early Bird</b></h6>
                                        <br>
                                        1 Juli - 21 Juli
                                        <br>
                                        <b>Rp 90.000</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="kotakKecil">
                                    <div class="isiKotakKecil">
                                        <br><br>
                                        <h6><b>Gelombang 1</b></h6>
                                        <br>
                                        22 Juli - 8 Sept
                                        <br>
                                        <b>Rp 120.000</b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="kotakKecil">
                                    <div class="isiKotakKecil">
                                        <br><br>
                                        <h6><b>Gelombang 2</b></h6>
                                        <br>
                                        9 Sept - 27 Okt
                                        <br>
                                        <b>Rp 140.000</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="margin-check judulSection">E-SPORT COMPETITION</div>
                        <br>
                        <br>
                        <button class="btn-selengkap"
                            style="background:url({{asset("Image/bt_1.png")}}); background-size: cover; "
                            onclick="location.href='/esport'">Selengkapnya</button>
                    </div>
                </div>
                <div class="row" style="margin-top: 45px;">
                    <img src="{{asset("Image/bg_esport.png")}}" id="bg_esport">
                    <div class="col-lg-3 col-sm-12">
                        <div class="kotakMedium">
                            <img src="{{asset("Image/ml.png")}}" class="logo" id="logoML">
                            <div class="isiKotak">
                                <b>Mobile Legends</b>
                                <br>
                                Umum
                                <br>
                                64 Slot
                                <br>
                                <b>Rp 60.000</b>
                                <br>
                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "
                                    onclick="location.href='/signupEsport'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="kotakMedium">
                            <img src="{{asset("Image/pubgm.png")}}" class="logo" id="logoPUBGM">
                            <div class="isiKotak">
                                <b>PUBG Mobile</b>
                                <br>
                                Umum
                                <br>
                                50 Slot
                                <br>
                                <b>Rp 100.000</b>
                                <br>
                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "
                                    onclick="location.href='/signupEsport'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="kotakMedium">
                            <img src="{{asset("Image/dota.png")}}" class="logo" id="logoDOTA">
                            <div class="isiKotak">
                                <b>DOTA 2</b>
                                <br>
                                Umum
                                <br>
                                32 Slot
                                <br>
                                <b>Rp 120.000</b>
                                <br>
                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "
                                    onclick="location.href='/signupEsport'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="kotakMedium">
                            <img src="{{asset("Image/csgo.png")}}" class="logo" id="logoCSGO">
                            <div class="isiKotak">
                                <b>CS:GO</b>
                                <br>
                                Umum
                                <br>
                                32 Slot
                                <br>
                                <b>Rp 120.000</b>
                                <br>
                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "
                                    onclick="location.href='/signupEsport'">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="margin-check judulSection">GALLERY</div>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-lg-12">
                        <div id="demo-depan" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo-depan" data-slide-to="0" class="active"></li>
                                <li data-target="#demo-depan" data-slide-to="1"></li>
                                <li data-target="#demo-depan" data-slide-to="2"></li>
                                <li data-target="#demo-depan" data-slide-to="3"></li>
                                <li data-target="#demo-depan" data-slide-to="4"></li>
                                <li data-target="#demo-depan" data-slide-to="5"></li>
                                <li data-target="#demo-depan" data-slide-to="6"></li>
                                <li data-target="#demo-depan" data-slide-to="7"></li>
                                <li data-target="#demo-depan" data-slide-to="8"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{asset("Image/1.jpg")}}" class="img-responsive" alt="1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("Image/2.jpg")}}" class="img-responsive" alt="2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("Image/3.jpg")}}" class="img-responsive" alt="3">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("Image/4.jpg")}}" class="img-responsive" alt="4">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("Image/5.jpg")}}" class="img-responsive" alt="5">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("Image/6.jpg")}}" class="img-responsive" alt="6">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("Image/7.jpg")}}" class="img-responsive" alt="7">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("Image/8.jpg")}}" class="img-responsive" alt="8">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset("Image/9.jpg")}}" class="img-responsive" alt="9">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo-depan" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo-depan" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Find Us<br>
                        <div class="kontak-bawah">
                            <a href="https://id-id.facebook.com/mageits/" target="_blank"><img id="logoTW"
                                    src="{{asset("Image/FB.png")}}"></a>
                            <a href="https://www.instagram.com/mage_its/" target="_blank"><img id="logoTW"
                                    src="{{asset("Image/IG.png")}}"></a>
                            <a href="https://twitter.com/mage_its" target="_blank"><img id="logoTW"
                                    src="{{asset("Image/TW.png")}}"></a>
                            <a href="https://line.me/ti/p/~@rio5948f" target="_blank"><img id="logoTW"
                                    src="{{asset("Image/LINE.png")}}"></a>
                            <a href="https://www.youtube.com/channel/UCO1SuldERZu0jgBBDzzOkoQ/featured"
                                target="_blank"><img id="logoYT" src="{{asset("Image/youtube.png")}}"></a>
                        </div>
                        <br><br>
                        B211 Computer Engineering Dept. FTE ITS
                        <br><br>
                        <img src="{{asset("Image/logo-bawah.png")}}" id="logoBawah">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="{{asset("js/SlideShow.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="{{asset("js/util.js")}}"></script>
    <script src="{{asset("js/swipe-content.js")}}"></script>
    <script src="{{asset("js/main.js")}}"></script>
    <script src="{{asset("js/navbar.js")}}"></script>
    <script src="{{asset("js/particle-config.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <script src="{{asset("js/popup.js")}}"></script>
</body>

</html>