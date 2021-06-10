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
    <script src="{{asset("js/countdownDashboard.js")}}"></script>
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
    <div class="barAtas">
        <div class="isi">
            <div style="position: absolute; top: 3%; left: 3%; z-index: 9999;">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="justify-content: center; margin-top: 240px;">
            <div class="col-lg-4">
                <!-- <img src="{{asset("Image/noun_startup.svg")}}" alt="" class="svg" style="margin-top: 80px;"> -->
                <div class="text-center" style="width: 100%">Roket siap meluncur dalam </div>
                <br>
                <div class="text-center" id="countdown" style="width:100%">00:00:00</div>
                <div style="width:auto; position: relative; left: 50%; transform: translateX(-50%);">
                    <button class="btn-selengkap" style="position: relative; left: 50%; transform:translateX(-50%);background:url(&#39;Image/bt_2.png&#39;); width:auto; cursor: pointer; background-size: cover;" onclick="location.href='home'">Kembali ke Dashboard</button>
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