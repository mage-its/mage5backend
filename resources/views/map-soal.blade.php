<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>Olimpiade | MAGE 5</title>
    <link rel="shorcut icon" href="{{asset("Image/favicon.ico")}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="endTime" content="{{$endTime}}">
    <meta name="currentTime" content="{{$currentTime}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{asset("js/countdown.js")}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/style-timeline.css")}}">
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='https://ricostacruz.com/jquery.transit/jquery.transit.min.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>
</head>

<body style="background:url(&#39;Image/rasi/peta.png&#39;); background-size: cover;">
    <div id="particles"></div>
    <div style="position: absolute; top: 3%; left: 3%; z-index: 9999;">
        <a href="intro"><img src="{{asset("Image/home.png")}}" width="60px;"></a>
    </div>
    <div style="position: absolute; top: 3%; right: 3%; z-index: 9999;" id="countdown">
        Waktu Tersisa: 00 : 00 : 00
    </div>
    <div style="position: absolute; top: 8%; right: 3%; z-index: 9999;">
        Score: {{$score}}
    </div>

    <div class="container" style="height: 678px;">

        <div class="margin-check judulsection"
            style="position: relative; left: 50%; transform: translateX(-50%); top: 12.5%; margin-top: 60px;font-size: 1.25em">
            <b>PICK YOUR CARD</b></div>

        <?php
        $card_array = array('program', 'fisika', 'logika');
        shuffle($card_array);
        ?>

        <div class="row align-items-center text-center align-items-center"
            style="position: relative; top: 40%; transform: translateY(-45%);">
            <div class="col-lg-4 animated fadeInLeft map" style="animation-duration: 0.75s;">

                <div class="kotak flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Image/logo-mage1.png" alt="Avatar"
                                style="width: 70%;height:auto; position: relative; top: 50%; transform:translateY(-50%);">
                        </div>
                        <div class="flip-card-back">
                            @if ($card_array[0] == 'program')
                            <i class="fas fa-laptop-code" style="font-size: 125px; margin-top: 35px;"></i>
                            <br><br><br><span>Pemrograman</span><br>
                            <button class="btn-selengkap"
                                style="background:url(&#39;Image/bt_2.png&#39;); background-size: cover; "
                                onclick="location.href='/rasi/program'">Mulai</button>
                            @elseif ($card_array[0] == 'fisika')
                            <i class="fas fa-bolt" style="font-size: 125px; margin-top: 35px;"></i>
                            <br><br><br><span>Fisika</span><br>
                            <button class="btn-selengkap"
                                style="background:url(&#39;Image/bt_2.png&#39;); background-size: cover; "
                                onclick="location.href='/rasi/fisika'">Mulai</button>
                            @elseif ($card_array[0] == 'logika')
                            <i class="fas fa-brain" style="font-size: 125px; margin-top: 35px;"></i>
                            <br><br><br><span>Logika</span><br>
                            <button class="btn-selengkap"
                                style="background:url(&#39;Image/bt_2.png&#39;); background-size: cover; "
                                onclick="location.href='/rasi/logika'">Mulai</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 animated zoomIn map" style="animation-duration: 0.75s;">
                <div class="kotak flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Image/logo-mage1.png" alt="Avatar"
                                style="width: 70%;height:auto; position: relative; top: 50%; transform:translateY(-50%);">
                        </div>
                        <div class="flip-card-back">
                            @if ($card_array[1] == 'program')
                            <i class="fas fa-laptop-code" style="font-size: 125px; margin-top: 35px;"></i>
                            <br><br><br><span>Pemrograman</span><br>
                            <button class="btn-selengkap"
                                style="background:url(&#39;Image/bt_2.png&#39;); background-size: cover; "
                                onclick="location.href='/rasi/program'">Mulai</button>
                            @elseif ($card_array[1] == 'fisika')
                            <i class="fas fa-bolt" style="font-size: 125px; margin-top: 35px;"></i>
                            <br><br><br><span>Fisika</span><br>
                            <button class="btn-selengkap"
                                style="background:url(&#39;Image/bt_2.png&#39;); background-size: cover; "
                                onclick="location.href='/rasi/fisika'">Mulai</button>
                            @elseif ($card_array[1] == 'logika')
                            <i class="fas fa-brain" style="font-size: 125px; margin-top: 35px;"></i>
                            <br><br><br><span>Logika</span><br>
                            <button class="btn-selengkap"
                                style="background:url(&#39;Image/bt_2.png&#39;); background-size: cover; "
                                onclick="location.href='/rasi/logika'">Mulai</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 animated fadeInRight map" style="animation-duration: 0.75s;">
                <div class="kotak flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Image/logo-mage1.png" alt="Avatar"
                                style="width: 70%;height:auto; position: relative; top: 50%; transform:translateY(-50%);">
                        </div>
                        <div class="flip-card-back">
                            @if ($card_array[2] == 'program')
                            <i class="fas fa-laptop-code" style="font-size: 125px; margin-top: 35px;"></i>
                            <br><br><br><span>Pemrograman</span><br>
                            <button class="btn-selengkap"
                                style="background:url(&#39;Image/bt_2.png&#39;); background-size: cover; "
                                onclick="location.href='/rasi/program'">Mulai</button>
                            @elseif ($card_array[2] == 'fisika')
                            <i class="fas fa-bolt" style="font-size: 125px; margin-top: 35px;"></i>
                            <br><br><br><span>Fisika</span><br>
                            <button class="btn-selengkap"
                                style="background:url(&#39;Image/bt_2.png&#39;); background-size: cover; "
                                onclick="location.href='/rasi/fisika'">Mulai</button>
                            @elseif ($card_array[2] == 'logika')
                            <i class="fas fa-brain" style="font-size: 125px; margin-top: 35px;"></i>
                            <br><br><br><span>Logika</span><br>
                            <button class="btn-selengkap"
                                style="background:url(&#39;Image/bt_2.png&#39;); background-size: cover; "
                                onclick="location.href='/rasi/logika'">Mulai</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset("js/Ajax-soal.js")}}"></script>
        <script src="{{asset("js/SlideShow.js")}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script src="{{asset("js/util.js")}}"></script>
        <script src="{{asset("js/swipe-content.js")}}"></script>
        <script src="{{asset("js/main.js")}}"></script>
        <script src="{{asset("js/navbar.js")}}"></script>
        <script src="{{asset("js/particles.js")}}"></script>
        <script src="{{asset("js/particles.min.js")}}"></script>
        <script src="{{asset("js/app.js")}}"></script>
        <script src="{{asset("js/restrict.js")}}"></script>
        <script src="{{asset("js/ajax-submisi.js")}}"></script>
        <script src="{{asset("js/particle-config.js")}}"></script>
</body>

</html>