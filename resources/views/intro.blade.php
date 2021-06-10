<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>Olimpiade | MAGE 5</title>
    <link rel="shorcut icon" href="{{asset("Image/favicon.ico")}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {{-- <meta name="endTime" content="{{$endTime}}">
    <meta name="currentTime" content="{{$currentTime}}"> --}}
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

    <div class="barAtas">
        <div class="isi">

            </div>
        </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div style="margin-top: 120px;">
          <img src="Image/hhhhh.jpg" alt="" srcset="" style="width: 750px; height:auto; position: relative; left: 50%; transform: translateX(-50%); opacity: 0.85">
          <p class="text-justify animated fadeInLeft" style="margin-top: 100px;">Galaxy Edison, Turing dan Neumann adalah 3 galaxy yang sudah dihuni manusia selama ribuan tahun setelah terciptanya FTL travel. Semua koloni di galaksi-galaksi ini memiliki sumber daya yang melimpah dengan perkembangan teknologi yang pesat.</p>
          <br>
          <p class="text-justify animated fadeInRight">Namun sebuah asteroid dari galaksi Niko yang jatuh ke salah satu planet dari 3 galaksi tersebut membawa sebuah virus. Virus yang sekarang dikenal dengan nama TMJ_5 menyebar ke berbagai planet bahkan menyebar ke galaksi lain.</p>
          <br>
          <p class="text-justify animated fadeInLeft">Kalian sebagai ilmuwan, mengikuti sayembara yang diadakan oleh Professor Lico untuk mencari sumber dari (Galacti)epidemic virus TMJ_5 dan sekaligus membasminya</p>
          <br>
          <div style="width: 450px; position: relative; left: 50%; transform: translateX(-50%); margin-bottom:75px;">
            <button class="btn-selengkap" style="background:url(&#39;Image/bt_2.png&#39;); width:auto; cursor: pointer; background-size: cover;" onclick="location.href='home'">Kembali ke Dashboard</button>
            <button class="btn-selengkap" style="background:url(&#39;Image/bt_1.png&#39;); width:auto; cursor: pointer; background-size: cover; margin-left: 40px;" onclick="location.href='map'">Lanjutkan Perjalanan</button>
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