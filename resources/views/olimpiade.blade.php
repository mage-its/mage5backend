<!DOCTYPE html>
<html>
<head>
    <title>Olimpiade | MAGE 5</title>
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
            <div class="container">
                <div class="row" style="margin-top: 120px;">
                    <div class="col-lg-4 animated fadeInUp">
                        <div class="kotak">
                            <img src="{{asset("Image/logo-olim.png")}}" id="logoOlimpiade" class="logo">
                            <div class="isiKotak">
                                <b>Olimpiade</b>
                                <br>
                                Pelajar
                                <br>
                                <button class="btn-selengkap" style="background:url({{asset("Image/bt_2.png")}}); background-size: cover; "onclick="location.href='/signupOlim'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="margin-check judulSection animated zoomIn"><h3><b>OLIMPIADE</b></h3></div>
                        
                        <div class="text-justify deskripsi animated fadeInUp" style="font-size:17px; margin-top: 80px;">
                         <p>
                            Olimpiade ini merupakan sebuah inovasi yang terbilang baru dalam pelaksanaan MAGE 5. Olimpiade ini bergerak dalam bidang komputer yang dirancang untuk pelajar SMA/sederajat, untuk menguji kemampuan siswa/i Indonesia dalam menyelesaikan soal-soal terkait logika, pemrograman, dan fisika. Olimpiade ini memiliki tiga babak dalam penyelenggaraannya, ketiga babak tersebut yakni babak penyisihan, babak semifinal, dan babak final.   
                         </p>
                        </div>                    
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="section2" style="background:url({{asset("Image/bg_2.png")}}); background-size: 100% 100%;">
            <div class="container animated fadeInUp">
                <div class="row">
                    <div class="col-lg-7 sm-12 " style="margin-top: 75px;">
                        <div class="margin-check judulSection"><b>TOTAL HADIAH</b></div>
                        <br>
                        <br>
                            <div class="kotak-hadiah" style="background:url({{asset("Image/bt_4.png")}});">
                                <b>Rp 6.000.000</b>
                            </div>
                            <h2>+</h2>
                            <h2>Free Pass Teknik Komputer ITS</h2>
                            *Untuk juara 1 <b>pelajar</b>
                   </div>
                    <div class="col-lg-1 sm-12" style="margin-top: 75px;">
                    </div>                     
                   <div class="col-lg-4 sm-12 " style="margin-top: 75px;">
                        <div class="margin-check judulSection"><b>MATERI</b></div>
                        <br><br>
                        <div class="text-left" style="margin-left:32%;">
                         <ul>
                             <li><i class="fas fa-bolt" id="ikonmateri"></i>Fisika Kelistrikan</li>
                             <li><i class="fas fa-laptop-code" id="ikonmateri"></i>Programming</li>
                             <li><i class="fas fa-brain" id="ikonmateri"></i>Logika</li>
                         </ul>
                        </div>
                    </div>                    
                </div>      
             </div>
        </section>
  
  <section class="section" id="section_common">
          <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 sm-12" style="margin-top: 50px;">
                        <div class="margin-check judulSection">SYARAT PENDAFTARAN</div>
                        <br><br>
                        <div class="list-list">
                            <div class="list-list-col1">
                                <i class="fa fa-angle-double-right"></i>
                            </div>
                            <div class="list-list-col2">
                                <span>Calon peserta merupakan siswa <b>SMA sederajat</b></span>
                            </div>
                        </div>    
                        <div class="list-list">    
                            <div class="list-list-col1">
                                <i class="fa fa-angle-double-right"></i>
                            </div>
                            <div class="list-list-col2">
                                <span>Satu tim terdiri dari <b>maksimal 3 orang</b> dari sekolah yang sama</span>
                            </div>
                        </div>    
						 <div class="list-list">    
                            <div class="list-list-col1">
                                <i class="fa fa-angle-double-right"></i>
                            </div>
                            <div class="list-list-col2">
                                <span>Satu tim boleh terdiri dari campuran siswa / siswi kelas <b>10, 11, 12</b> atau hanya dari kelas yang sama</span>
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
                                <span>Membayar <b>biaya Pendaftaran </b>sesuai nominal yang tertera pada saat melakukan pendaftaran</span>
                            </div>    
                         </div>  
						
                    </div>
             </div>
             <div class="row justify-content-center">
                <div class="col-lg-2 col-sm-12">
                    <button class="btn-guidebook" style="background:url({{asset("Image/bt_1.png")}}); background-size: cover;"onclick="location.href='/gbolim';">Download Guidebook</button>
                </div>
                <div class="col-lg-2 col-sm-12">
                    <button class="btn-guidebook" style="background:url({{asset("Image/bt_1.png")}}); background-size: cover;"onclick="location.href='/posterolim';">Download Poster</button>
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
                                            <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">1 Juli - 21 Juli</a></li>
											<li><a href="#0" data-date="21/02/2014" class="cd-h-timeline__date">22 Juli -  8 Sept</a></li>
											<li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">9 Sept - 27 Okt</a></li>
                                            <li><a href="#0" data-date="28/03/2014" class="cd-h-timeline__date">3 Nov</a></li>
                                            <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">16 Nov</a></li>
                                            <li><a href="#0" data-date="20/05/2014" class="cd-h-timeline__date">17 Nov</a></li>
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
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Pendaftaran Early Bird</h2>
                                            <em class="cd-h-timeline__event-date">1 Juli 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                              Dibuka pendaftaran untuk Early Bird
                                            </p>
                                          </div>
                                        </li>
										
										<li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Pendaftaran Gelombang 1</h2>
                                            <em class="cd-h-timeline__event-date">22 Juli 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                              Dibuka pendaftaran untuk Gelombang 1
                                            </p>
                                          </div>
                                        </li>
										
										<li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Pendaftaran Gelombang 2</h2>
                                            <em class="cd-h-timeline__event-date">9 September 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                              Dibuka pendaftaran untuk Gelombang 2
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Penyisihan</h2>
                                            <em class="cd-h-timeline__event-date">Minggu, 3 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                              Penyisihan dilakukan secara <b>online</b>	
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family: Montserrat; font-size:24px;">Semifinal</h2>
                                            <em class="cd-h-timeline__event-date">Sabtu, 16 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                              Semifinal dilaksanakan secara offline dan bertempat di Fakultas Teknologi Elektro, Institut Teknologi Sepuluh Nopember
                                            </p>
                                          </div>
                                        </li>
                                
                                        <li class="cd-h-timeline__event text-component">
                                          <div class="cd-h-timeline__event-content container">
                                            <h2 class="cd-h-timeline__event-title" style="color: white; font-family:Montserrat; font-size:24px;">Final</h2>
                                            <em class="cd-h-timeline__event-date">Minggu, 17 November 2019</em>
                                            <p class="cd-h-timeline__event-description text--subtle" style="color: white;"> 
                                                Final dilaksanakan secara offline dan bertempat di Institut Teknologi Sepuluh Nopember
                                            </p>
                                          </div>
                                        </li>
                                      </ol>
                                    </div>
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
								<b>Apa itu Olimpiade MAGE 5?</b>
							  </div>
							  </a>
							  <div id="collapseOne" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								  Olimpiade ini bergerak dalam bidang komputer yang dirancang
                                  untuk pelajar SMA/sederajat, untuk menguji kemampuan siswa/i Indonesia
                                  dalam menyelesaikan soal-soal terkait logika, pemrograman, dan fisika.</div>
							  </div>
							 
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
							  <div class="card-header">
								<b>Apa saja tahapan seleksi Olimpiade?</b>
							  </div>
							  </a>
							  <div id="collapseTwo" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								Ada 3 tahap yaitu penyisihan <b>(online)</b>, semifinal, dan final.
								</div>
							</div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
							<div class="card-header">
							<b>Berapa biaya pendaftaran Olimpiade?</b>
							  </div>
							  </a>
							  <div id="collapseThree" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								  - Early Bird : <b>Rp 90.000</b>
                                    <br>
                                  - Gelombang 1 : <b>Rp 120.000</b>
                                              <br>
                                  - Gelombang 2 : <b>Rp 140.000</b></div>
							  </div>
							</div>
							
							<div class="card">
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
							<div class="card-header">
							<b>Kapan pendaftaran dibuka?</b>
							  </div>
							  </a>
							  <div id="collapseFour" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								    - Untuk Early Bird mulai dibuka tanggal <b>1 Juli 2019</b><br>
									- Untuk Gelombang 1 mulai dibuka tanggal <b>22 Juli 2019</b><br>
									- Untuk Gelombang 2 mulai dibuka tanggal <b>9 September 2019</b><br></div>
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
							<a class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
							<div class="card-header">
							<b>Karena penyisihannya online, apakah saya akan mendapat sertifikat?</b>
							  </div>
							  </a>
							  <div id="collapseSix" class="collapse" data-parent="#accordion">
								<div class="card-body text-justify">
								 Iya. Akan dikirimkan berbentuk e-sertifikat yang sudah dilegalisasi.
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
										- Hakim : 0857-2007-5470 <br>
                                        - Binar : 0857-7075-6955 <br>
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