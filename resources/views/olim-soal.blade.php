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
    <script src="{{asset("js/countdown.js")}}"></script>
</head>

<body style="background:url({{asset("Image/rasi/peta.png")}}); background-size: cover;">
    <div id="particles"></div>
    <div style="position: absolute; top: 3%; left: 3%; z-index: 9999;">
        @if ($soal->jenis_soal == 'program')
        <a href="../../rasi/program"><img src="{{asset("Image/home.png")}}" width="60px;"></a>
        <br>
        <h3>Pemrograman</h3>
        @elseif ($soal->jenis_soal == 'fisika')
        <a href="../../rasi/fisika"><img src="{{asset("Image/home.png")}}" width="60px;"></a>
        <br>
        <h3>Fisika</h3>
        @elseif ($soal->jenis_soal == 'logika')
        <a href="../../rasi/logika"><img src="{{asset("Image/home.png")}}" width="60px;"></a>
        <br>
        <h3>Logika</h3>
        @endif
    </div>
    <div style="position: absolute; top: 3%; right: 3%; z-index: 9999;" id="countdown">
        Waktu Tersisa: 00:00:00
    </div>
    <div style="position: absolute; top: 8%; right: 3%; z-index: 9999;">
        Score: {{$score}}
    </div>

    <div id="konten">
        <section class="section" id="section2 section-soal">
            <div class="row">
                <div class="container">
                    <div class="row" style="margin-top: 150px;">
                        <div class="col-lg-6 animated fadeInLeft">
                            @if (isset($soal->image))
                            <img src="{{asset("soal/".$soal->image)}}" style="width:70%;">
                            <br><br>
                            @endif
                            @if (isset($soal->soal))
                            <div style="text-align: justify;">{{$soal->soal}} </div>
                            @endif
                        </div>
                        <div class="col-lg-6 animated fadeInRight">
                            <div class="vertical-center">
                                Jawaban Anda:
                                <br><br>
                                <form style="margin-bottom: 20px;" action="/feedback" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                                    <input type="hidden" name="soal_id" value="{{$soal->id}}">
                                    <div class="margin-check-jawaban">
                                        <textarea name="jawaban-olim" class="form-jawaban" id="restrict"
                                            placeholder="Masukkan jawaban anda" rows="1" cols="32"></textarea>
                                    </div>

                                </form>
                                <div class="jawabansalah animated bounceInRight" style="color:red; font-size: 0.8em">
                                </div>
                                <button class="btn-selengkap"
                                    style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "
                                    onclick="getFeedback()">Simpan
                                </button>
                            </div>
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
    <script src="{{asset("js/particles.js")}}"></script>
    <script src="{{asset("js/particles.min.js")}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <script src="{{asset("js/restrict.js")}}"></script>
    <script src="{{asset("js/ajax-submisi.js")}}"></script>
    <script src="{{asset("js/particle-config.js")}}"></script>
</body>

</html>