<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home Page Route
Route::get('/', function () { return view('index'); });
Route::get('/about', function () { return view('about'); });
Route::get('/devcom', function() { return view('devcom'); });
Route::get('/esport', function() { return view('Esport'); });
Route::get('/olim', function() { return view('olimpiade'); });

//close page
Route::get('/closed',function() { return view('close'); });

//Twibbon Creator buat olim
Route::get('/twibbon','TwibbonController@index' )->middleware('auth');
Route::post('/twibbon', 'TwibbonController@combine')->middleware('auth');

//user daftar Olim
Route::get('/signupOlim', 'OlimController@userIndex')->middleware('auth','sudahisi', 'verified');
Route::post('/submitOlim', 'OlimController@finalSubmit')->middleware('auth','sudahisi', 'verified');
Route::post('/checkCode', 'OlimController@CheckPromo')->middleware('auth','sudahisi', 'verified'); 


//user daftar Esport
Route::get('/signupEsport', 'EsportController@userIndex')->middleware('auth','sudahisi', 'verified');
 Route::post('/submitEsport', 'EsportController@submit')->middleware('auth','sudahisi', 'verified');

//user daftar DevComp
Route::get('/signupDevcomp', 'MainCompController@userIndex')->middleware('auth','sudahisi', 'verified');
Route::post('/submitDevComp', 'MainCompController@submit')->middleware('auth','sudahisi', 'verified');

//upload Bukti Bayar
Route::post('/uploadbb', 'HomeController@upload')->middleware('auth', 'verified');

//upload File DevComp
// Route::post('/uploaddev', 'HomeController@uploadProposal')->middleware('auth', 'verified');
Route::post('/uploaddev', 'HomeController@uploadProgress')->middleware('auth', 'verified');

//FILES ROUTE
Route::get('/gbolim',function() {return response()->file('pdf/Guidebook Olimpiade MAGE 5.pdf');});
Route::get('/gbesport',function() {return response()->file('pdf/Guidebook E-Sport MAGE 5.pdf');});
Route::get('/gbdevcomp',function() {return response()->file('pdf/Guidebook DevCom.pdf');});

Route::get('/posterolim',function() {return response()->file('poster/A3-OLIM_olim.jpg');});
Route::get('/posteresport',function() {return response()->file('poster/Poster Esport.jpg');});
Route::get('/posterdevcom',function() {return response()->file('poster/A3-DEVCOMP-01.jpg');});

Route::get('/soalmage4',function() {return response()->file('pdf/Soal MAGE 4.pdf');});
Route::get('/proposalGame',function() {return response()->download('files/Contoh Proposal Game.docx');});
Route::get('/proposalApps',function() {return response()->download('files/Contoh Proposal Apps.docx');});
Route::get('/guGame',function() {return response()->download('files/Contoh Gambaran Umum Game.docx');});
Route::get('/guAppsnIot',function() {return response()->download('files/Contoh Gambaran Umum IOT dan Apps.docx');});
Route::get('/template',function() {return response()->download('files/Template Mage.docx');});
Route::get('/logoMage',function() {return response()->download('files/LOGO MAGE 5.zip');});

Route::get('/suratOrisinal',function() {return response()->download('files/SURAT KETERANGAN ORISINALITAS.docx');});
Route::get('/suratKesanggupan',function() {return response()->download('files/SURAT PERNYATAAN KESEDIAAN MENGIKUTI KEGIATAN FINAL.docx');});

Route::get('/lolosTahap1', function () { return response()->file('files/lolos.pdf'); });
Route::get('/progressGame',function() {return response()->download('files/Deskripsi Progress Game Compt.docx');});
Route::get('/progressApps',function() {return response()->download('files/Deskripsi Progress App Iot.docx');});

//Route Auth
Auth::routes(['verify' => true]);

//Route User
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bayar', 'DashboardController@bayarIndex')->middleware('auth');
Route::get('/submission', 'DashboardController@submisiIndex')->middleware('auth');
Route::get('/data', 'DashboardController@rekapIndex')->middleware('auth');
Route::get('/file', 'DashboardController@fileIndex')->middleware('auth');
Route::get('/testOnline', 'DashboardController@testIndex')->middleware('auth');

//Route Admin
Route::get('/admin', function() { return view('admin'); })->middleware('auth','admin')->name('admin');

//Route Admin Olimpiade
Route::get('/daftarolim', 'OlimController@index')->middleware('auth','admin');
Route::post('/daftarolim/hapus', 'OlimController@hapus')->middleware('auth','admin');
Route::post('/daftarolim/verif', 'OlimController@toggleVerif')->middleware('auth','admin');
Route::post('/daftarolim/update', 'OlimController@update')->middleware('auth','admin');
Route::get('/daftarolim/download', 'OlimController@download')->middleware('auth','admin');

//Route Admin Esports
Route::get("/daftaresport", 'EsportController@index')->middleware('auth','admin');
Route::post('/daftaresport/hapus', 'EsportController@hapus')->middleware('auth','admin');
Route::post('/daftaresport/verif', 'EsportController@toggleVerif')->middleware('auth','admin');
Route::post('/daftaresport/update', 'EsportController@update')->middleware('auth','admin');
Route::get('/daftaresport/download', 'EsportController@download')->middleware('auth','admin');

//Route Admin MainComp All
Route::get('/daftarmaincomp', 'MainCompController@index')->middleware('auth','admin');
Route::post('/daftarmaincomp/hapus', 'MainCompController@hapus')->middleware('auth','admin');
Route::post('/daftarmaincomp/verif', 'MainCompController@toggleVerif')->middleware('auth','admin');
Route::post('/daftarmaincomp/update', 'MainCompController@update')->middleware('auth','admin');
Route::get('/daftarmaincomp/download', 'MainCompController@download')->middleware('auth','admin');
Route::post('/daftarmaincomp/verifk', 'MainCompController@toggleVerifKestari')->middleware('auth','admin');
Route::post('/daftarmaincomp/verifa', 'MainCompController@toggleVerifAcara')->middleware('auth','admin');
Route::post('/daftarmaincomp/lolos', 'MainCompController@lolos')->middleware('auth','admin');

//Route Admin MainComp Tahap x saja
Route::get('/daftarmaincomp2/{id}', 'MainCompController@index_req')->middleware('auth','admin');
Route::get('/daftarmaincomp2/download/{id}', 'MainCompController@downloadReq')->middleware('auth','admin');

//Route Admin Daftar Soal
Route::get('/daftarsoal', 'SoalController@index')->middleware('auth','admin');
Route::post('/daftarsoal/add', 'SoalController@store')->middleware('auth','admin');
Route::post('/daftarsoal/hapus', 'SoalController@destroy')->middleware('auth','admin');

//list peserta
Route::get('/list', 'UserController@getVerified')->middleware('auth','admin');
Route::get('/list/download', 'UserController@download')->middleware('auth','admin');

//List Pengumuman
Route::get('/announce', 'AnnounceController@index')->middleware('auth','admin');
Route::get('/announce/download', 'AnnounceController@download')->middleware('auth','admin');

//Route Admin Score
Route::get('/score', 'UserAnswerController@ScoreIndex')->middleware('auth', 'admin');
Route::get('/scoredetails/{userId}', 'UserAnswerController@ScoreDetails')->middleware('auth', 'admin');
Route::get('/score/download', 'UserAnswerController@Download')->middleware('auth','admin');

//Route Email
Route::get('/test-send-email', 'EmailController@testSend')->name('email.test.send');
Route::get('/test-queue-email', 'EmailController@testQueue')->name('email.test.queue');

//Route Test
Route::get('/generate', 'UserAnswerController@generate')->middleware('auth','admin');
Route::get('/soal/{userSoalID}', 'UserAnswerController@index')->middleware('auth');
Route::get('/test/{noSoal}', 'UserAnswerController@onCorrectRasi1');
Route::get('/testing', 'UserAnswerController@index');

Route::get('/rasi/{jenis_soal}', 'UserAnswerController@indexSoal')->middleware('auth');

Route::get('/cobasaja', function () { return view('count'); });
Route::get('/waktuhabis', function () { return view('waktuhabis'); });

Route::post('/check', 'UserAnswerController@Check')->middleware('auth');

Route::get('/olim-soal', function(){
    return view('olim-soal');
});


Route::get('/begin', 'UserAnswerController@beginView')->middleware('auth');
Route::get('/intro', 'UserAnswerController@introView')->middleware('auth');
Route::get('/map', 'UserAnswerController@mapView')->middleware('auth');
Route::get('/end', 'UserAnswerController@endView')->middleware('auth');

Route::post('/feedback','AjaxController@index');

Route::get('/getscore', 'ScoreController@index');
Route::get('/freezescore', 'ScoreController@freeze');
Route::get('/allscore', function () { return view('score.score'); });
Route::get('/specScore', function () { return view('score.specScore'); });
Route::get('/score/{posNumber}', 'ScoreController@index_req');
Route::get('/inputScore', function () { return view('admin.inputscore'); })->middleware('auth','admin');

Route::post('/scoreInput', 'ScoreController@store')->middleware('auth','admin');
Route::get("/buang", function() { return view('intro');});

Route::get("/talkshowxworkshop", function(){
    return view('talkshowxworkshop');
});
