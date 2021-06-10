<html>
    <head>
        <meta charset="utf-8">
        <title>Registrasi | MAGE 5</title>
		<link rel="shorcut icon" href="{{asset("Image/favicon.ico")}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">   
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset("CSS/fullpage.css")}}" />
        <script src='https://ricostacruz.com/jquery.transit/jquery.transit.min.js'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
		<link rel="stylesheet" href="{{asset("css/animate.css")}}">
		<link rel="stylesheet" href="{{asset("css/styles.css")}}">
		<link rel="stylesheet" href="{{asset("css/login.css")}}">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="{{asset("js/particles.min.js")}}"></script>
    </head>
    
<body>
    <div class="barAtas">
        <div class="isi">
			<a class="tengahOther" href="/"><img id="logoTengah" src="{{asset("Image/logo-mage4.png")}}"></a>
			<nav class="navbar">
				<a class="nav-item dropdownnav-link dropdown-toggle isinavbar perisi" href="#" id="navbardrop" data-toggle="dropdown">
				Event
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="/">Exhibition and Talkshow</a>
					<a class="dropdown-item" href="/olim">Olimpiade</a>
					<a class="dropdown-item" href="/devcom">Development Competition</a>
					<a class="dropdown-item" href="/esport">E-Sport Competition</a>
				</div>
				<a class="isinavbar perisi" href="{{route('login')}}"><b>Login</b></a>
			</nav>
        </div>  
	</div>
  <section class="section">
    <div id="particles"></div>
    <div class="container">            
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 isi-box animated fadeInLeft" id="logo-login">
                    <img src="{{asset("Image/logo-mage2.png")}}" id="logomage">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 isi-box animated fadeInRight" id="isi-login">
                <span class="form-judul">Registrasi</span>
                @error('email')
                    <span class="txt-error">{{$message}}</span>
                @enderror
                @error('password')
                    <span class="txt-error">{{$message}}</span>
                @enderror
                @error('name')
                    <span class="txt-error">{{$message}}</span>
                @enderror
                @error('phone')
                    <span class="txt-error">{{$message}}</span>
                @enderror
                <form method="POST" action="{{route("register")}}">
                    @csrf
                    <div class="form-masukan">
                        <input class="masukan" type="text" required autofocus placeholder="Username" name="name" value="{{ old('name') }}">
                        <span class="symbol-masukan">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="form-masukan">
                        <input class="masukan" required type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                        <span class="symbol-masukan">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>                
                    <div class="form-masukan">
                        <input class="masukan" required type="text" name="phone" placeholder="No Telepon" value="{{ old('phone') }}">
                        <span class="symbol-masukan">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                    </div>                
                    <div class="form-masukan">
                        <input class="masukan" type="password" name="password" placeholder="Password" required> 
                        <span class="symbol-masukan">
                            <i class="fa fa-lock" aria-hidden="lock"></i>
                        </span>
                    </div>          
                    <div class="form-masukan">
                        <input class="masukan" type="password" name="password_confirmation" required placeholder="Konfirmasi Password"> 
                        <span class="symbol-masukan">
                            <i class="fa fa-key" aria-hidden="lock"></i>
                        </span>
                    </div>   
                    
                    <button class="btn-selengkap" style="background:url({{asset("Image/bt_1.png")}}); background-size: cover; "type="submit">Register</button> 
                </form>
            </div>          
      </div>
      </div>
  </section>
  <script  src="{{asset("js/particle-config.js")}}"></script>

</body>
    
</html>