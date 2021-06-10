<!DOCTYPE html>
<html>
<head>
    <title>Development Competition | MAGE 5</title>
	<link rel="shorcut icon" href="{{asset("Image/favicon.ico")}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset("css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/style-timeline.css")}}">        
    <link rel="stylesheet" href="{{asset("css/styles.css")}}">
    <meta name="description" content="
            Kompetisi IT terbesar di Indonesia untuk Pelajar dan Mahasiswa yang diselenggarakan oleh Mahasiswa Teknik Komputer FTE ITS Surabaya
            #MAGE5
            #RaisingANewWorld"
    >
    <meta name="keywords" content="Kompetisi,IT,Olimpiade,ITS,Surabaya">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src='https://ricostacruz.com/jquery.transit/jquery.transit.min.js'></script>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
</head>
 
<body style="background-color: black;">
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
				<a class="isinavbar perisi" href="{{ route('login') }}"><b>Login</b></a>
			</nav>
        </div>
    </div>
    <div id="konten">
        
        <section class="section" id="section2" style="background:url({{asset("Image/bg_1.png")}}); background-size: 100% 100%;">
            <div class="container animated fadeInUp">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center animated zoomIn" style="margin-top:10%">
                        <div class="margin-check judulSection" id="judulDevcom"><h3><b>DEVELOPMENT COMPETITION</b></h3></div>
                    </div> 
                </div>
                
					
				<div class="row" style="margin-top:120px;">
				
                    <div class="col-sm-12 col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-app.png")}}" class="logo" id="logoApp">
                            <div class="isiKotak">
                                <b>Application </b>
                                <br>
                                Pelajar<br>Mahasiswa
                                <br>
                                <button class="btn-selengkap" style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "onclick="location.href='/signupDevcomp'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-game.png")}}" class="logo" id="logoGame">
                            <div class="isiKotak">
                                <b>Game</b>
                                <br>
                                Pelajar<br>Mahasiswa
                                <br>
                                <button class="btn-selengkap" style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "onclick="location.href='/signupDevcomp'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-iot.png")}}" class="logo" id="logoIOT">
                            <div class="isiKotak">
                                <b>Internet of Thing</b>
                                <br>
                                Mahasiswa
                                <br>
                                <button class="btn-selengkap" style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "onclick="location.href='/signupDevcomp'">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section2" style="background:url({{asset("Image/bg_2.png")}}); background-size: 100% 100%;">
            <div class="container animated fadeInUp">
                <div class="row">
                    <div class="col-lg-7 sm-12 " style="margin-top: 50px;">
                        <div class="margin-check judulSection"><b>TOTAL HADIAH</b></div>
                        <br>
                        <br>
                            <div class="kotak-hadiah" style="background:url({{asset("Image/bt_4.png")}});">
                                <b>Rp 40.000.000 </b>
                            </div>
                            <h2>+</h2>
                            <h2>Free Pass Teknik Komputer ITS</h2>
                            *Untuk juara 1 kategori <b>pelajar</b>
                   </div>
                    <div class="col-lg-1 sm-12" style="margin-top: 50px;">
                    </div>                     
                   <div class="col-lg-4 sm-12 " style="margin-top: 50px;">
                        <div class="margin-check judulSection"><b>SUBTEMA</b></div>
                        <br><br>
                        <div class="text-center">
                         <p>Education, Infrastructure, Business, Maritime, E-Government, Lifestyle, Health Care, Culture, Environment, Agriculture, History, Sociopreneur.
</p>
                        </div>
                    </div>                    
                </div>      
             </div>
        </section>
        <section class="section" id="section_common">
          <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 sm-12" style="margin-top: 50px;">
                        <div class="margin-check judulSection ">SYARAT PENDAFTARAN</div>
                        <br><br>
                        <div class="list-list">
                            <div class="list-list-col1">
                                <i class="fa fa-angle-double-right"></i>
                            </div>
                            <div class="list-list-col2">
                                <span>Calon peserta merupakan siswa <b>SMA sederajat</b> atau mahasiswa aktif <b>D3/D4/S1</b></span>
                            </div>
                        </div>    
                        <div class="list-list">    
                            <div class="list-list-col1">
                                <i class="fa fa-angle-double-right"></i>
                            </div>
                            <div class="list-list-col2">
                                <span>Satu tim terdiri dari <b>maksimal 3 orang</b> dari sekolah atau perguruan tinggi yang sama</span>
                            </div>
                        </div>    
                        <div class="list-list">                                
                            <div class="list-list-col1">
                                <i class="fa fa-angle-double-right"></i>
                            </div>
                            <div class="list-list-col2">
                                <span>Melakukan pendaftaran secara <b>online</b></span>
                            </div>
                        </div>    
                        <div class="list-list">                                
                            <div class="list-list-col1">
                                <i class="fa fa-angle-double-right"></i>
                            </div>
                            <div class="list-list-col2">
                                <span>Melakukan submit gambaran umum dan poster pada laman web <b>mage-its.com</b></span>
                            </div>    
                         </div>
						
                    </div> 
             </div>
             <div class="row justify-content-center">
                <div class="col-lg-2 col-sm-12">
                    <button class="btn-guidebook" style="background:url({{asset("Image/bt_1.png")}}); background-size: cover;"onclick="location.href='/gbdevcomp';">Download Guidebook</button>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <button class="btn-guidebook" style="background:url({{asset("Image/bt_1.png")}}); background-size: cover;"onclick="location.href='/posterdevcom';">Download Poster</button>
                </div>
            </div>
         </div>  
        </section>                        

        <section class="section" id="section_common">
          <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 sm-12" style="margin-top: 50px;">
                        <div class="margin-check judulSection ">BIAYA PENDAFTARAN</div>
                        <br><br>
                        <div class="list-list">
                            <div class="list-list-col1-a">
                                <p><b>1</b></p>
                            </div>
                            <div class="list-list-col2">
                                <p><b>Tahap 1</b><br>
                                <b>GRATIS</b></p>
                            </div>
                        </div>  
                        <div class="list-list">
                            <div class="list-list-col1-a">
                                <p><b>2</b></p>
                            </div>
                            <div class="list-list-col2">
                                <p><b>Tahap 2</b></p>
                                <p>- Rp 120.000 (Siswa)</p>
                                <p>- Rp 150.000 (Mahaiswa)</p>
                            </div>
                        </div>                         
                    </div> 
             </div>
         </div>  
        </section>         
        <section class="section" id="section_common">
            <div class="container">
                <div class="row" style="margin-top: 75px;">
                    <div class="col-sm-12 col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-app.png")}}" class="logo" id="logoApp">
                            <div class="isiKotak">
                                <b>Application</b>
                                <br>
								<br>Pelajar<br>
                                Mahasiswa
                                <br>
								<br>
								<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="margin-check judulSection"><b>APPLICATION <br> DEVELOPMENT COMPETITION</b></div>
                        <br><br>
                        <div class="text-justify deskripsi">
                            <p><b>Application Development Competition</b> merupakan kompetisi pembuatan aplikasi berskala nasional yang diselenggarakan sebagai media bagi pelajar dan mahasiswa untuk mengeksplorasi kreativitas dan inovasi dalam bidang teknologi.</p>
                        </div>                    
                    </div>
                </div>
            </div>
        </section>        

        <section class="section" id="section_common">
            <div class="container">
                <div class="row" style="margin-top: 50px;">
                    <div class="col-sm-12 col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-game.png")}}" class="logo" id="logoGame">
                            <div class="isiKotak">
                                <b>Game</b>
                                <br>
								<br>Pelajar<br>
                                Mahasiswa
                                <br>
								<br>
								<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="margin-check judulSection"><b>GAME <br>DEVELOPMENT COMPETITION</b></div>
                        <br><br>
                        <div class="text-justify deskripsi">
                            <p><b>Game Development Competition</b> merupakan cabang kompetisi dari Multimedia and Game Event (MAGE) 5 yang diadakan oleh Teknik Komputer ITS. MAGE Game Competition diadakan dengan tujuan mendorong kreasi serta inovasi mahasiswa maupun siswa SMA sederajat untuk membuat sebuah aplikasi permainan atau game.</p>
                        </div>                    
                    </div>
                </div>
            </div>
        </section>           

        <section class="section" id="section_common">
            <div class="container">
                <div class="row" style="margin-top: 75px;">
                    <div class="col-sm-12 col-lg-4">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-iot.png")}}" class="logo" id="logoIOT">
                            <div class="isiKotak">
                                <b>Internet of Things</b>
                                <br>
								<br>
                                Mahasiswa
                                <br>
								<br>
								<br>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="margin-check judulSection"><b>INTERNET OF THINGS <br> DEVELOPMENT COMPETITION</b></div>
                        <br><br>
                        <div class="text-justify deskripsi">
                            <p><b>Internet of Things Development Competition</b> adalah kompetisi pembuatan alat yang memanfaatkan koneksi nirkabel untuk alat kendali yang dapat terhubung / berkomunikasi dengan alat-alat yang dikendalikan. Lomba ini berskala nasional dan berfungsi sebagai media bagi mahasiswa untuk meningkatkan kemampuan, mengembangkan kreativitas, dan merealisasikan rancangan imajinatif dalam bentuk alat dan aplikasi. </p>
                        </div>                    
                    </div>
                </div>
            </div>
        </section>   

       <section class="section" id="section_common">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                             <div class="margin-check judulSection"><b>TIMELINE</b></div>
                            <br><br><br>
                            <section class="cd-h-timeline js-cd-h-timeline margin-bottom--md">
                                    <div class="cd-h-timeline__container container">
                                      <div class="cd-h-timeline__dates">
                                        <div class="cd-h-timeline__line">
                                          <ol>
                                            <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">1 Juli - 25 Agust</a></li>
                                            <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">26 Agust - 2 Sept</a></li>
                                            <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">5 Sept</a></li>
                                            <li><a href="#0" data-date="20/05/2014" class="cd-h-timeline__date">8 Sept</a></li>
                                            <li><a href="#0" data-date="09/07/2014" class="cd-h-timeline__date">9 Sept - 21 Sept</a></li>
                                            <li><a href="#0" data-date="30/08/2014" class="cd-h-timeline__date">28 Sept</a></li>
                                            <li><a href="#0" data-date="15/09/2014" class="cd-h-timeline__date">29 Sept - 16 Nov</a></li>
                                            <li><a href="#0" data-date="01/11/2014" class="cd-h-timeline__date">29 Sept - 26 Okt</a></li>
                                            <li><a href="#0" data-date="10/12/2014" class="cd-h-timeline__date">2 Nov</a></li>
                                            <li><a href="#0" data-date="19/01/2015" class="cd-h-timeline__date">17 Nov</a></li>
                                          </ol>
                                
                                          <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                                        </div> <!-- .cd-h-timeline__line -->
                                      </div> <!-- .cd-h-timeline__dates -->
                                        
                                      <ul>
                                        <li><a href="#0" class="text--replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
                                        <li><a href="#0" class="text--replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a></li>
                                      </ul>
                                    </div> <!-- .cd-h-timeline__container -->
                                
                                    <div class="cd-h-timeline__events">
                                      <ol>
                                        <li class="cd-h-timeline__event cd-h-timeline__event--selected text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Pendaftaran</h2>
                                            <em class="cd-h-timeline__event-date">1 Juli 2019 - 25 Agustus 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat;  font-size:24px;">Upload Poster & Gambaran Umum</h2>
                                            <em class="cd-h-timeline__event-date">26 Juli 2019 - 2 September 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Pengumuman Tahap 1</h2>
                                            <em class="cd-h-timeline__event-date">5 September 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family:Montserrat; font-size:24px;">Batas Pembayaran</h2>
                                            <em class="cd-h-timeline__event-date">8 September 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Upload Proposal</h2>
                                            <em class="cd-h-timeline__event-date">9 September 2019 - 21 September 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Pengumuman Tahap 2</h2>
                                            <em class="cd-h-timeline__event-date">28 September 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Realisasi Karya</h2>
                                            <em class="cd-h-timeline__event-date">29 September 2019 - 16 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Upload Video & Laporan Progress</h2>
                                            <em class="cd-h-timeline__event-date">29 September 2019 - 26 Oktober 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Pengumuman Tahap 3</h2>
                                            <em class="cd-h-timeline__event-date">2 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family:Montserrat; font-size:24px;">Final</h2>
                                            <em class="cd-h-timeline__event-date">17 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                            </p>
                                          </div>
                                        </li>
                                      </ol>
                                    </div> <!-- .cd-h-timeline__events -->
                                  </section>
                    </div>
                </div>
            </div>
        </section>        

       <section class="section" id="section3">
          <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 sm-12" style="margin-top: 50px;">
                        <div class="margin-check judulSection ">FAQ</div>
                        <br><br>
						
						<div id="accordion">
							<div class="card">
								<a class="card-link" data-toggle="collapse" href="#collapseOne">
							  <div class="card-header">
								<b>Apa itu Devcom?</b>
							  </div>
							  </a>
							  <div id="collapseOne" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								  Devcom adalah singkatan dari Development Competition, yaitu kompetisi pengembangan teknologi digital
								  berupa aplikasi, permainan (game), dan IoT.
                               </div>
							  </div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
							  <div class="card-header">
								<b>Apa saja subtema Devcom?</b>
							  </div>
							  </a>
							  <div id="collapseTwo" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								
								Education, Infrastructure, Business, Maritime, E-Government, Lifestyle, Health Care, Culture, Environment, Agriculture, History, Sociopreneur.
                                    
								</div>
							</div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
							<div class="card-header">
							<b>Apa saja tahapan seleksi Devcom?</b>
							  </div>
							  </a>
							  <div id="collapseThree" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								  <b>Tahap 1 :</b> Submisi gambaran umum dan poster project.<br>  
                                     <b>Tahap 2 :</b> Submisi proposal project.<br>
                                     <b>Tahap 3 :</b> Realisasi karya dan submisi progress dan video project.<br>
                                     <b>Final :</b> Presentasi project.<br></div>
							  </div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
							<div class="card-header">
							<b>Berapa biaya pendaftaran Devcom?</b>
							  </div>
							  </a>
							  <div id="collapseFour" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								    Untuk tahap 1 tidak dipungut biaya apapun <b>(gratis)</b>, jika dinyatakan lolos ke tahap 2 peserta wajib membayar sesuai kategori.<br>  
                                    - Kategori siswa <b>Rp 120.000</b><br>
									- Kategori mahasiswa <b>Rp 150.000</b><br></div>
							  </div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
							<div class="card-header">
							 <b>Sampai kapan pendaftaran dibuka?</b>
							  </div>
							  </a>
							  <div id="collapseFive" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								   Pendaftaran dibuka sejak tanggal 1 Juli hingga 25 Agustus 2019.</div>
							  </div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
							<div class="card-header">
							<b>Apakah kekosongan anggota tim boleh diisi oleh peserta lain?</b>
							  </div>
							  </a>
							  <div id="collapseSix" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								 Tidak boleh. Anggota tim harus sesuai dengan yang didaftarkan saat pendaftaran.
                                    </div>
							  </div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
							<div class="card-header">
							<b>Saya ada pertanyaan lain. Siapa yang harus saya hubungi?</b>
							  </div>
							  </a>
							  <div id="collapseSeven" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								 Contact Person : <br>
                                        - Luthfi : 0857-3249-3258 <br>
                                        - Fikar : 0878-8492-8600 <br>
                                        - Faishal : 0857-4260-9002 <br></div>
							  </div>
							</div>
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
                            <a href="https://id-id.facebook.com/mageits/" target="_blank"><img id="logoTW" src="{{asset("Image/FB.png")}}"></a>
                            <a href="https://www.instagram.com/mage_its/" target="_blank"><img id="logoTW" src="{{asset("Image/IG.png")}}"></a>
                            <a href="https://twitter.com/mage_its" target="_blank"><img id="logoTW" src="{{asset("Image/TW.png")}}"></a>
                            <a href="https://line.me/ti/p/~@rio5948f" target="_blank"><img id="logoTW" src="{{asset("Image/LINE.png")}}"></a>
							<a href="https://www.youtube.com/channel/UCO1SuldERZu0jgBBDzzOkoQ/featured" target="_blank"><img id="logoYT" src="{{asset("Image/youtube.png")}}"></a>
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
    <script src="{{asset("js/particles.js")}}"></script>
    <script src="{{asset("js/particles.min.js")}}"></script>    
    <script src="{{asset("js/app.js")}}"></script>    
    
</body>
</html>