<html>
    <head>
        <meta charset="utf-8">
        <title>Registrasi | MAGE 5</title>
		<link rel="shorcut icon" href="{{asset("Image/favicon.ico")}}">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset("CSS/fullpage.css")}}" />
        <script src='https://ricostacruz.com/jquery.transit/jquery.transit.min.js'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
		<link rel="stylesheet" href="{{asset("css/animate.css")}}">
		<link rel="stylesheet" href="{{asset("css/styles.css")}}">
		<link rel="stylesheet" href="{{asset("css/login.css")}}">
        <meta name="description" content="
                Kompetisi IT terbesar di Indonesia untuk Pelajar dan Mahasiswa yang diselenggarakan oleh Mahasiswa Teknik Komputer FTE ITS Surabaya
                #MAGE5
                #RaisingANewWorld"
        >
        <meta name="keywords" content="Kompetisi,IT,Olimpiade,ITS,Surabaya">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="{{asset("js/particles.min.js")}}"></script>
    </head>
    
<body>
    <div class="barAtas">
        <div class="isi">
			<a class="tengahOther" href="index-fix.html"><img id="logoTengah" src="{{asset("Image/logo-mage4.png")}}"></a>
			<nav class="navbar">
				<a class="nav-item dropdownnav-link dropdown-toggle isinavbar perisi" href="#" id="navbardrop" data-toggle="dropdown">
				Event
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="index-fix.html">Exhibition and Talkshow</a>
					<a class="dropdown-item" href="olimpiade.html">Olimpiade</a>
					<a class="dropdown-item" href="devcom.html">Development Competition</a>
					<a class="dropdown-item" href="Esport.html">E-Sport Competition</a>
				</div>
				<a class="isinavbar perisi" href="login.html"><b>Login</b></a>
			</nav>
        </div>  
	</div>
  <section class="section">
    <div id="particles"></div>
    <div class="container">            
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 isi-box animated fadeInLeft" >
                    <img src="{{asset("Image/logo-mage2.png")}}" id="logomage">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 isi-box animated fadeInRight" >
                <span class="form-judul">Registrasi Akun</span>
                <div class="form-masukan">
                    <input class="masukan" type="text" name="" placeholder="Username">
                    <span class="symbol-masukan">
				        <i class="fa fa-user" aria-hidden="true"></i>
				    </span>
                </div>
                <div class="form-masukan">
                    <input class="masukan" type="text" name="email" placeholder="Email">
                    <span class="symbol-masukan">
				        <i class="fa fa-envelope" aria-hidden="true"></i>
				    </span>
                </div>                
                <div class="form-masukan">
                    <input class="masukan" type="password" name="" placeholder="Password"> 
                    <span class="symbol-masukan">
				        <i class="fa fa-lock" aria-hidden="lock"></i>
				    </span>
                </div>          
                <div class="form-masukan">
                    <input class="masukan" type="password" name="" placeholder="Konfirmasi Password"> 
                    <span class="symbol-masukan">
				        <i class="fa fa-key" aria-hidden="lock"></i>
				    </span>
                </div>   
                
                <button class="btn-selengkap" style="background:url({{asset("Image/bt_1.png")}}); background-size: cover; "onclick="location.href=''">Submit</button>
                 <div class="text_daftar">
                            <span class="txt1">
                                Sudah punya akun?
                            </span>
                            <a class="txt2" href="login.html">
                                Login
                            </a>
                    </div>                
                </div>                        
            </div>          
      </div>
      </div>
  </section>
  <script  src="{{asset("js/particle-config.js")}}"></script>
</body>
    
</html>