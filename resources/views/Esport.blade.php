<!DOCTYPE html>
<html>
<head>
    <title>E-Sport Competition | MAGE 5</title>
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
				<a class="isinavbar perisi" href="{{route('login')}}"><b>Login</b></a>
			</nav>
        </div>
    </div>

    <div id="konten">
        <section class="section" id="section2" style="background:url({{asset("Image/bg_1.png")}}); background-size: 100% 100%;">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center animated zoomIn" style="margin-top: 75px;">
							<div class="margin-check judulSection"><h3><b>E-SPORT COMPETITION</b></h3></div>
				</div> 
			</div>
			<div class="row">
            <div class="container animated fadeInUp">
                <div class="row" style="margin-top: 180px;">
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
                                <button class="btn-selengkap" style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "onclick="location.href='/signupEsport'">Daftar</button>
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
                                <button class="btn-selengkap" style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "onclick="location.href='/signupEsport'">Daftar</button>
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
                                <button class="btn-selengkap" style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "onclick="location.href='/signupEsport'">Daftar</button>
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
                                <button class="btn-selengkap" style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "onclick="location.href='/signupEsport'">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</div>
        </section>        
  
		<section class="section" id="section2" style="background:url({{asset("Image/bg_2.png")}}); background-size: 100% 100%;">
            <div class="container animated fadeInUp">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 " style="margin-top: 75px;">
                        <div class="margin-check judulSection"><b>TOTAL HADIAH</b></div>
                        <br>
                        <br>
                            <div class="kotak-hadiah" id="esport" style="background:url({{asset("Image/bt_4.png")}});">
                                <b>Rp 8.500.000</b>
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
                                <span> Calon peserta merupakan pelajar, mahasiswa, dan umum</span>
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
                                <span> Membayar biaya Pendaftaran sesuai nominal yang tertera pada saat melakukan pendaftaran</span>
                            </div>
                        </div>    
						
                    </div>  
             </div>
             <div class="row justify-content-center">
                <div class="col-lg-2 col-sm-12">
                    <button class="btn-guidebook" style="background:url({{asset("Image/bt_1.png")}}); background-size: cover;"onclick="location.href='/gbesport';">Download Guidebook</button>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <button class="btn-guidebook" style="background:url({{asset("Image/bt_1.png")}}); background-size: cover;"onclick="location.href='/posteresport';">Download Poster</button>
                </div>
            </div>
         </div>  
        </section>
  
        <section class="section" id="section_common">
            <div class="container">
                <div class="row" style="margin-top: 50px;">
                    <div class="col-sm-12">
                             <div class="margin-check judulSection"><b>TIMELINE</b></div>
                            <br><br><br>
                            <section class="cd-h-timeline js-cd-h-timeline margin-bottom--md">
                                    <div class="cd-h-timeline__container container">
                                      <div class="cd-h-timeline__dates">
                                        <div class="cd-h-timeline__line">
                                          <ol>
                                            <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">11 Okt</a></li>
                                            <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">12 Okt</a></li>
                                            <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">13 Okt</a></li>
                                            <li><a href="#0" data-date="20/05/2014" class="cd-h-timeline__date">25 Okt</a></li>
                                            <li><a href="#0" data-date="09/07/2014" class="cd-h-timeline__date">26 Okt</a></li>
                                            <li><a href="#0" data-date="30/08/2014" class="cd-h-timeline__date">1 Nov</a></li>
                                            <li><a href="#0" data-date="15/09/2014" class="cd-h-timeline__date">2 Nov</a></li>
                                            <li><a href="#0" data-date="01/11/2014" class="cd-h-timeline__date">3 Nov</a></li>
                                            <li><a href="#0" data-date="10/12/2014" class="cd-h-timeline__date">8 Nov</a></li>
                                            <li><a href="#0" data-date="10/12/2014" class="cd-h-timeline__date">9 Nov</a></li>
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
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Group Stage (DOTA 2)</h2>
                                            <em class="cd-h-timeline__event-date">Jumat, 11 Oktober 2019
                                            </em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                              Group stage dilakukan secara online dan sesuai sesi yang telah ditentukan.
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Semifinal (DOTA 2)</h2>
                                            <em class="cd-h-timeline__event-date"> Sabtu, 12 Oktober 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Semifinal dilakukan secara online dan sesuai sesi yang telah ditentukan.
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Final (DOTA 2)</h2>
                                            <em class="cd-h-timeline__event-date">Minggu, 13 Oktober 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Final dilakukan secara online dan sesuai sesi yang telah ditentukan. Pertandingan final dilaksanakan dengan sistem Best of 5.
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Group Stage (CS:GO)</h2>
                                            <em class="cd-h-timeline__event-date">Jumat, 25 Oktober 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Group stage dilakukan secara online dan sesuai sesi yang telah ditentukan.
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family:  Montserrat; font-size:24px;">Semifinal & Final (CS:GO)</h2>
                                            <em class="cd-h-timeline__event-date">Sabtu, 26 Oktober 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Semifinal & Final dilakukan secara online dan sesuai sesi yang telah ditentukan.
                                                Pertandingan semifinal dilaksanakan dengan sistem Bo1 single-elimination.
                                                Pertandingan final dilaksanakan dengan sistem Bo3.
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family:  Montserrat; font-size:24px;">Group Stage (PUBG-M)</h2>
                                            <em class="cd-h-timeline__event-date">Jumat, 1 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Group stage dilakukan secara online dan sesuai sesi yang telah ditentukan.
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Semifinal (PUBG-M)</h2>
                                            <em class="cd-h-timeline__event-date">Sabtu, 2 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Semifinal dilakukan secara online dan sesuai sesi yang telah ditentukan.
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Final (PUBG-M)</h2>
                                            <em class="cd-h-timeline__event-date">Sabtu, 2 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Final dilakukan secara online dan sesuai sesi yang telah ditentukan.
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family:  Montserrat; font-size:24px;">Group Stage (Mobile Legends)</h2>
                                            <em class="cd-h-timeline__event-date">Jumat, 8 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Group stage dilakukan secara online dan sesuai sesi yang telah ditentukan.
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family:  Montserrat; font-size:24px;">Semifinal (Mobile Legends)</h2>
                                            <em class="cd-h-timeline__event-date">Sabtu, 9 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Semifinal dilakukan secara online dan sesuai sesi yang telah ditentukan.
                                            </p>
                                          </div>
                                        </li>

                                        <li class="cd-h-timeline__event text-component">
                                            <div class="cd-h-timeline__event-content container">
                                              <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Final (Mobile Legends)</h2>
                                              <em class="cd-h-timeline__event-date">Sabtu, 17 November 2019</em>
                                              <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Final dilaksanakan di Balai Pemuda Surabaya pada pukul 14.30 WIB - Selesai.

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
								<b>Apa itu E-Sport Competition?</b>
							  </div>
							  </a>
							  <div id="collapseOne" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								  E-Sport Competition MAGE 5 adalah kompetisi yang mempertemukan 
                                    talenta-talenta terbaik
                                    dalam dunia E-Sport yang diperuntukan masyarakat umum.</div>
							  </div>
							 
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
							  <div class="card-header">
								<b>Siapa saja yang dapat mengikuti E-Sport Competition?</b>
							  </div>
							  </a>
							  <div id="collapseTwo" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								Tidak ada batasan kategori pemain dalam mengikuti E-Sport Competition.
								</div>
							</div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
							<div class="card-header">
							<b>Berapa jumlah peserta per tim?</b>
							  </div>
							  </a>
							  <div id="collapseThree" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								 Anggota tim berjumlah 5 orang dan 1 orang stand-in, khusus PUBG-Mobile berjumlah 4 orang dan 1 orang stand-in.
							  </div>
							</div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
							<div class="card-header">
							<b>Berapa biaya pendaftatan masing-masing lomba?</b>
							  </div>
							  </a>
							  <div id="collapseFour" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
									- Mobile Legends : <b>Rp 60.0000</b><br>
								    - PUBG Mobile : <b>Rp 100.000</b><br>
									- DOTA 2 : <b>Rp 120.000</b><br>
									- CS:GO : <b>120.0000</b><br>
									</div>
							  </div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
							<div class="card-header">
							 <b>Apakah kekosongan anggota tim boleh diisi oleh peserta lain?</b>
							  </div>
							  </a>
							  <div id="collapseFive" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								   Tidak boleh. Anggota tim harus sesuai dengan yang didaftarkan saat pendaftaran.</div>
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
										- Nugy : 0858-5874-1764 <br>
                                        - Misael : 0813-1506-3600 <br></div>
							  </div>
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