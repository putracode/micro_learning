<?php

use App\Http\Controllers\Admin\AdminDashboardPenilaianController;
use App\Mail\ApprovedMail;
use App\Mail\AprrovedMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\PostController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\App\GalleryController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermohonanController;
use App\Http\Controllers\App\PembelajaranController;
use App\Http\Controllers\Admin\AdminGalleryController;
use App\Http\Controllers\App\TentangAplikasiController;

use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\App\ListPembelajaranController;
use App\Http\Controllers\Admin\AdminListPembelajaranController;
use App\Http\Controllers\Admin\Pembelajaran\AdminNa3pController;
use App\Http\Controllers\Admin\Pembelajaran\AdminSpapController;
use App\Http\Controllers\Admin\Pembelajaran\AdminAklikController;
use App\Http\Controllers\Admin\Pembelajaran\AdminAklisController;
use App\Http\Controllers\Admin\Pembelajaran\AdminSarjuController;
use App\Http\Controllers\Admin\Pembelajaran\AdminRetailController;
use App\Http\Controllers\Admin\Pembelajaran\AdminPemeliharaanController;
use App\Http\Controllers\Admin\Pembelajaran\AdminFocController;
use App\Http\Controllers\Admin\Pembelajaran\AdminFotController;
use App\Http\Controllers\App\DashboardPenilaianController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/test', function () {
    return view('email.rejected');
});

// LOGIN
Route::get('/',[LoginController::class,'indexLogin'])->name('login')->middleware('guest');
Route::post('/',[LoginController::class,'authenticate'])->middleware('guest');
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth');
Route::get('/register',[LoginController::class,'indexRegister'])->middleware('guest');
Route::post('/register',[LoginController::class,'store'])->middleware('guest');
Route::get('/change-password',[ChangePasswordController::class,'change'])->middleware('auth');
Route::post('/change-password',[ChangePasswordController::class,'changePassword'])->middleware('auth');


Route::middleware(['auth'])->group(function(){
    
    // HOME
    Route::get('/home',[HomeController::class,'index'])->middleware('approved','newpassword');

    // LIST PEMBELAJARAN
    Route::get('/home/list-pembelajaran',[HomeController::class,'indexListPembelajaran'])->name('list-pembelajaran');

    // PEMBELAJARAN
    Route::get('/home/p/bidang-aktivasi-publik',[PembelajaranController::class,'indexAKLIK'])->name('indexAKLIK')->middleware('internal');
    Route::get('/home/p/bidang-aktivasi-listrik',[PembelajaranController::class,'indexAKLIS'])->name('indexAKLIS')->middleware('internal');
    Route::get('/home/p/bidang-NA3P',[PembelajaranController::class,'indexNA3P'])->name('indexNA3P')->middleware('internal');
    Route::get('/home/p/bidang-pemeliharaan',[PembelajaranController::class,'indexPEMELIHARAAN'])->name('indexPEMELIHARAAN')->middleware('internal');
    Route::get('/home/p/bidang-retail',[PembelajaranController::class,'indexRETAIL'])->name('indexRETAIL')->middleware('internal');
    Route::get('/home/p/bidang-SPAP',[PembelajaranController::class,'indexSPAP'])->name('indexSPAP')->middleware('internal');
    Route::get('/home/p/bidang-sarju',[PembelajaranController::class,'indexSARJU'])->name('indexSARJU')->middleware('internal');
    Route::get('/home/p/foc',[PembelajaranController::class,'indexFOC'])->name('indexFOC');
    Route::get('/home/p/fot',[PembelajaranController::class,'indexFOT'])->name('indexFOT');
    
    // MATERI
    Route::get('/home/p/materi-aklik/{post:id}',[PembelajaranController::class,'materiAKLIK'])->middleware('internal');
    Route::get('/home/p/materi-aklis/{post:id}',[PembelajaranController::class,'materiAKLIS'])->middleware('internal');
    Route::get('/home/p/materi-na3p/{post:id}',[PembelajaranController::class,'materiNA3P'])->middleware('internal');
    Route::get('/home/p/materi-pemeliharaan/{post:id}',[PembelajaranController::class,'materiPEMELIHARAAN'])->middleware('internal');
    Route::get('/home/p/materi-retail/{post:id}',[PembelajaranController::class,'materiRETAIL'])->middleware('internal');
    Route::get('/home/p/materi-spap/{post:id}',[PembelajaranController::class,'materiSPAP'])->middleware('internal');
    Route::get('/home/p/materi-sarju/{post:id}',[PembelajaranController::class,'materiSARJU'])->middleware('internal');
    Route::get('/home/p/materi-foc/{post:id}',[PembelajaranController::class,'materiFOC']);
    Route::get('/home/p/materi-fot/{post:id}',[PembelajaranController::class,'materiFOT']);
    
    // QUIZ
    Route::get('/home/p/quiz-aklik/{post:id}',[PembelajaranController::class,'quizAKLIK'])->middleware('internal');
    Route::get('/home/p/quiz-aklis/{post:id}',[PembelajaranController::class,'quizAKLIS'])->middleware('internal');
    Route::get('/home/p/quiz-na3p/{post:id}',[PembelajaranController::class,'quizNA3P'])->middleware('internal');
    Route::get('/home/p/quiz-pemeliharaan/{post:id}',[PembelajaranController::class,'quizPEMELIHARAAN'])->middleware('internal');
    Route::get('/home/p/quiz-retail/{post:id}',[PembelajaranController::class,'quizRETAIL'])->middleware('internal');
    Route::get('/home/p/quiz-spap/{post:id}',[PembelajaranController::class,'quizSPAP'])->middleware('internal');
    Route::get('/home/p/quiz-sarju/{post:id}',[PembelajaranController::class,'quizSARJU'])->middleware('internal');
    Route::get('/home/p/quiz-foc/{post:id}',[PembelajaranController::class,'quizFOC']);
    Route::get('/home/p/quiz-fot/{post:id}',[PembelajaranController::class,'quizFOT']);
    
    // Tentang Kami
    Route::get('/home/tentang-aplikasi',[TentangAplikasiController::class,'index'])->name('tentang-aplikasi');
    
    // List Pembelajaran
    Route::get('/home/list-pembelajaran',[ListPembelajaranController::class,'index'])->name('list-pembelajaran');
    
    // Gallery
    Route::get('/home/gallery',[GalleryController::class,'index'])->name('gallery');
    
    // Dashboard Penilaian
    Route::get('/home/dashboard-penilaian',[DashboardPenilaianController::class,'index'])->name('gallery');
});








// ADMIN
Route::middleware(['admin','auth'])->group(function(){

    Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('dashboard');
    
    Route::get('/admin/user',[RegisterController::class,'index'])->name('user');
    Route::get('/admin/user/create',[RegisterController::class,'create']);
    Route::post('/admin/user',[RegisterController::class,'store']);
    Route::get('/admin/user/{id}/edit',[RegisterController::class,'edit']);
    Route::post('/admin/user/{id}',[RegisterController::class,'update']);
    Route::get('/admin/user/{id}',[RegisterController::class,'destroy']);
    
    Route::get('/admin/permohonan-user',[PermohonanController::class,'index'])->name('permohonan-user');
    Route::post('/admin/permohonan-user/{id}/tolak',[PermohonanController::class,'tolak']);
    Route::get('/admin/permohonan-user/{id}/terima',[PermohonanController::class,'terima']);
    
    Route::get('/admin/p/aklik',[AdminAklikController::class,'index'])->name('PembelajaranAklik');
    Route::get('/admin/p/aklik/create',[AdminAklikController::class,'create']);
    Route::post('/admin/p/aklik',[AdminAklikController::class,'store']);
    Route::get('/admin/p/aklik/{id}/edit',[AdminAklikController::class,'edit']);
    Route::post('/admin/p/aklik/{id}',[AdminAklikController::class,'update']);
    Route::get('/admin/p/aklik/{id}',[AdminAklikController::class,'destroy']);
    
    Route::get('/admin/p/aklis',[AdminAklisController::class,'index'])->name('PembelajaranAklis');
    Route::get('/admin/p/aklis/create',[AdminAklisController::class,'create']);
    Route::post('/admin/p/aklis',[AdminAklisController::class,'store']);
    Route::get('/admin/p/aklis/{id}/edit',[AdminAklisController::class,'edit']);
    Route::post('/admin/p/aklis/{id}',[AdminAklisController::class,'update']);
    Route::get('/admin/p/aklis/{id}',[AdminAklisController::class,'destroy']);
    
    Route::get('/admin/p/na3p',[AdminNa3pController::class,'index'])->name('PembelajaranNa3p');
    Route::get('/admin/p/na3p/create',[AdminNa3pController::class,'create']);
    Route::post('/admin/p/na3p',[AdminNa3pController::class,'store']);
    Route::get('/admin/p/na3p/{id}/edit',[AdminNa3pController::class,'edit']);
    Route::post('/admin/p/na3p/{id}',[AdminNa3pController::class,'update']);
    Route::get('/admin/p/na3p/{id}',[AdminNa3pController::class,'destroy']);
    
    Route::get('/admin/p/pemeliharaan',[AdminPemeliharaanController::class,'index'])->name('PembelajaranPemeliharaan');
    Route::get('/admin/p/pemeliharaan/create',[AdminPemeliharaanController::class,'create']);
    Route::post('/admin/p/pemeliharaan',[AdminPemeliharaanController::class,'store']);
    Route::get('/admin/p/pemeliharaan/{id}/edit',[AdminPemeliharaanController::class,'edit']);
    Route::post('/admin/p/pemeliharaan/{id}',[AdminPemeliharaanController::class,'update']);
    Route::get('/admin/p/pemeliharaan/{id}',[AdminPemeliharaanController::class,'destroy']);
    
    Route::get('/admin/p/retail',[AdminRetailController::class,'index'])->name('PembelajaranRetail');
    Route::get('/admin/p/retail/create',[AdminRetailController::class,'create']);
    Route::post('/admin/p/retail',[AdminRetailController::class,'store']);
    Route::get('/admin/p/retail/{id}/edit',[AdminRetailController::class,'edit']);
    Route::post('/admin/p/retail/{id}',[AdminRetailController::class,'update']);
    Route::get('/admin/p/retail/{id}',[AdminRetailController::class,'destroy']);
    
    Route::get('/admin/p/sarju',[AdminSarjuController::class,'index'])->name('PembelajaranSarju');
    Route::get('/admin/p/sarju/create',[AdminSarjuController::class,'create']);
    Route::post('/admin/p/sarju',[AdminSarjuController::class,'store']);
    Route::get('/admin/p/sarju/{id}/edit',[AdminSarjuController::class,'edit']);
    Route::post('/admin/p/sarju/{id}',[AdminSarjuController::class,'update']);
    Route::get('/admin/p/sarju/{id}',[AdminSarjuController::class,'destroy']);
    
    Route::get('/admin/p/spap',[AdminSpapController::class,'index'])->name('PembelajaranSpap');
    Route::get('/admin/p/spap/create',[AdminSpapController::class,'create']);
    Route::post('/admin/p/spap',[AdminSpapController::class,'store']);
    Route::get('/admin/p/spap/{id}/edit',[AdminSpapController::class,'edit']);
    Route::post('/admin/p/spap/{id}',[AdminSpapController::class,'update']);
    Route::get('/admin/p/spap/{id}',[AdminSpapController::class,'destroy']);
    
    Route::get('/admin/p/foc',[AdminFocController::class,'index'])->name('PembelajaranFOC');
    Route::get('/admin/p/foc/create',[AdminFocController::class,'create']);
    Route::post('/admin/p/foc',[AdminFocController::class,'store']);
    Route::get('/admin/p/foc/{id}/edit',[AdminFocController::class,'edit']);
    Route::post('/admin/p/foc/{id}',[AdminFocController::class,'update']);
    Route::get('/admin/p/foc/{id}',[AdminFocController::class,'destroy']);
    
    Route::get('/admin/p/fot',[AdminFotController::class,'index'])->name('PembelajaranFOT');
    Route::get('/admin/p/fot/create',[AdminFotController::class,'create']);
    Route::post('/admin/p/fot',[AdminFotController::class,'store']);
    Route::get('/admin/p/fot/{id}/edit',[AdminFotController::class,'edit']);
    Route::post('/admin/p/fot/{id}',[AdminFotController::class,'update']);
    Route::get('/admin/p/fot/{id}',[AdminFotController::class,'destroy']);
    
    Route::get('/admin/list-pembelajaran',[AdminListPembelajaranController::class,'index'])->name('AdminListPembelajaran');
    Route::get('/admin/list-pembelajaran/create',[AdminListPembelajaranController::class,'create']);
    Route::post('/admin/list-pembelajaran',[AdminListPembelajaranController::class,'store']);
    Route::get('/admin/list-pembelajaran/{id}/edit',[AdminListPembelajaranController::class,'edit']);
    Route::post('/admin/list-pembelajaran/{id}',[AdminListPembelajaranController::class,'update']);
    Route::get('/admin/list-pembelajaran/{id}',[AdminListPembelajaranController::class,'destroy']);
    
    Route::get('/admin/gallery',[AdminGalleryController::class,'index'])->name('AdminGallery');
    Route::get('/admin/gallery/create',[AdminGalleryController::class,'create']);
    Route::post('/admin/gallery',[AdminGalleryController::class,'store']);
    Route::get('/admin/gallery/{id}/edit',[AdminGalleryController::class,'edit']);
    Route::post('/admin/gallery/{id}',[AdminGalleryController::class,'update']);
    Route::get('/admin/gallery/{id}',[AdminGalleryController::class,'destroy']);
    
    Route::get('/admin/dashboard-penilaian',[AdminDashboardPenilaianController::class,'index'])->name('AdminDashboardPenilaian');
    Route::get('/admin/dashboard-penilaian/create',[AdminDashboardPenilaianController::class,'create']);
    Route::post('/admin/dashboard-penilaian',[AdminDashboardPenilaianController::class,'store']);
    Route::get('/admin/dashboard-penilaian/{id}/edit',[AdminDashboardPenilaianController::class,'edit']);
    Route::post('/admin/dashboard-penilaian/{id}',[AdminDashboardPenilaianController::class,'update']);
    Route::get('/admin/dashboard-penilaian/{id}',[AdminDashboardPenilaianController::class,'destroy']);

});
