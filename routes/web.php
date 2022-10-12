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
    return view('layout.admin');
});

// LOGIN
Route::get('/',[LoginController::class,'indexLogin'])->name('login')->middleware('guest');
Route::post('/',[LoginController::class,'authenticate'])->middleware('guest');
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/register',[LoginController::class,'indexRegister'])->middleware('guest');
Route::post('/register',[LoginController::class,'store'])->middleware('guest');
Route::get('/change-password',[ChangePasswordController::class,'change'])->middleware('auth');
Route::post('/change-password',[ChangePasswordController::class,'changePassword'])->middleware('auth');

// HOME
Route::get('/home',[HomeController::class,'index'])->middleware('auth','approved','newpassword');

// LIST PEMBELAJARAN
Route::get('/home/list-pembelajaran',[HomeController::class,'indexListPembelajaran'])->name('list-pembelajaran')->middleware('auth');

// PEMBELAJARAN
Route::get('/home/p/bidang-aktivasi-publik',[PembelajaranController::class,'indexAKLIK'])->name('indexAKLIK')->middleware('auth');
Route::get('/home/p/bidang-aktivasi-listrik',[PembelajaranController::class,'indexAKLIS'])->name('indexAKLIS')->middleware('auth');
Route::get('/home/p/bidang-NA3P',[PembelajaranController::class,'indexNA3P'])->name('indexNA3P')->middleware('auth');
Route::get('/home/p/bidang-pemeliharaan',[PembelajaranController::class,'indexPEMELIHARAAN'])->name('indexPEMELIHARAAN')->middleware('auth');
Route::get('/home/p/bidang-retail',[PembelajaranController::class,'indexRETAIL'])->name('indexRETAIL')->middleware('auth');
Route::get('/home/p/bidang-SPAP',[PembelajaranController::class,'indexSPAP'])->name('indexSPAP')->middleware('auth');
Route::get('/home/p/bidang-sarju',[PembelajaranController::class,'indexSARJU'])->name('indexSARJU')->middleware('auth');
Route::get('/home/p/foc',[PembelajaranController::class,'indexFOC'])->name('indexFOC')->middleware('auth');
Route::get('/home/p/fot',[PembelajaranController::class,'indexFOT'])->name('indexFOT')->middleware('auth');

// MATERI
Route::get('/home/p/materi-aklik/{post:id}',[PembelajaranController::class,'materiAKLIK'])->middleware('auth');
Route::get('/home/p/materi-aklis/{post:id}',[PembelajaranController::class,'materiAKLIS'])->middleware('auth');
Route::get('/home/p/materi-na3p/{post:id}',[PembelajaranController::class,'materiNA3P'])->middleware('auth');
Route::get('/home/p/materi-pemeliharaan/{post:id}',[PembelajaranController::class,'materiPEMELIHARAAN'])->middleware('auth');
Route::get('/home/p/materi-retail/{post:id}',[PembelajaranController::class,'materiRETAIL'])->middleware('auth');
Route::get('/home/p/materi-spap/{post:id}',[PembelajaranController::class,'materiSPAP'])->middleware('auth');
Route::get('/home/p/materi-sarju/{post:id}',[PembelajaranController::class,'materiSARJU'])->middleware('auth');
Route::get('/home/p/materi-foc/{post:id}',[PembelajaranController::class,'materiFOC'])->middleware('auth');
Route::get('/home/p/materi-fot/{post:id}',[PembelajaranController::class,'materiFOT'])->middleware('auth');

// QUIZ
Route::get('/home/p/quiz-aklik/{post:id}',[PembelajaranController::class,'quizAKLIK'])->middleware('auth');
Route::get('/home/p/quiz-aklis/{post:id}',[PembelajaranController::class,'quizAKLIS'])->middleware('auth');
Route::get('/home/p/quiz-na3p/{post:id}',[PembelajaranController::class,'quizNA3P'])->middleware('auth');
Route::get('/home/p/quiz-pemeliharaan/{post:id}',[PembelajaranController::class,'quizPEMELIHARAAN'])->middleware('auth');
Route::get('/home/p/quiz-retail/{post:id}',[PembelajaranController::class,'quizRETAIL'])->middleware('auth');
Route::get('/home/p/quiz-spap/{post:id}',[PembelajaranController::class,'quizSPAP'])->middleware('auth');
Route::get('/home/p/quiz-sarju/{post:id}',[PembelajaranController::class,'quizSARJU'])->middleware('auth');
Route::get('/home/p/quiz-foc/{post:id}',[PembelajaranController::class,'quizFOC'])->middleware('auth');
Route::get('/home/p/quiz-fot/{post:id}',[PembelajaranController::class,'quizFOT'])->middleware('auth');

// Tentang Kami
Route::get('/home/tentang-aplikasi',[TentangAplikasiController::class,'index'])->name('tentang-aplikasi')->middleware('auth');

// List Pembelajaran
Route::get('/home/list-pembelajaran',[ListPembelajaranController::class,'index'])->name('list-pembelajaran')->middleware('auth');

// Gallery
Route::get('/home/gallery',[GalleryController::class,'index'])->name('gallery')->middleware('auth');

// Dashboard Penilaian
Route::get('/home/dashboard-penilaian',[DashboardPenilaianController::class,'index'])->name('gallery')->middleware('auth');







// ADMIN

Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('admin','auth');

Route::get('/admin/user',[RegisterController::class,'index'])->name('user')->middleware('admin','auth');
Route::get('/admin/user/create',[RegisterController::class,'create'])->middleware('admin','auth');
Route::post('/admin/user',[RegisterController::class,'store'])->middleware('admin','auth');
Route::get('/admin/user/{id}/edit',[RegisterController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/user/{id}',[RegisterController::class,'update'])->middleware('admin','auth');
Route::get('/admin/user/{id}',[RegisterController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/permohonan-user',[PermohonanController::class,'index'])->name('permohonan-user')->middleware('admin','auth');
Route::post('/admin/permohonan-user/{id}/tolak',[PermohonanController::class,'tolak'])->middleware('admin','auth');
Route::get('/admin/permohonan-user/{id}/terima',[PermohonanController::class,'terima'])->middleware('admin','auth');

Route::get('/admin/p/aklik',[AdminAklikController::class,'index'])->name('PembelajaranAklik')->middleware('admin','auth');
Route::get('/admin/p/aklik/create',[AdminAklikController::class,'create'])->middleware('admin','auth');
Route::post('/admin/p/aklik',[AdminAklikController::class,'store'])->middleware('admin','auth');
Route::get('/admin/p/aklik/{id}/edit',[AdminAklikController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/p/aklik/{id}',[AdminAklikController::class,'update'])->middleware('admin','auth');
Route::get('/admin/p/aklik/{id}',[AdminAklikController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/p/aklis',[AdminAklisController::class,'index'])->name('PembelajaranAklis')->middleware('admin','auth');
Route::get('/admin/p/aklis/create',[AdminAklisController::class,'create'])->middleware('admin','auth');
Route::post('/admin/p/aklis',[AdminAklisController::class,'store'])->middleware('admin','auth');
Route::get('/admin/p/aklis/{id}/edit',[AdminAklisController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/p/aklis/{id}',[AdminAklisController::class,'update'])->middleware('admin','auth');
Route::get('/admin/p/aklis/{id}',[AdminAklisController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/p/na3p',[AdminNa3pController::class,'index'])->name('PembelajaranNa3p')->middleware('admin','auth');
Route::get('/admin/p/na3p/create',[AdminNa3pController::class,'create'])->middleware('admin','auth');
Route::post('/admin/p/na3p',[AdminNa3pController::class,'store'])->middleware('admin','auth');
Route::get('/admin/p/na3p/{id}/edit',[AdminNa3pController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/p/na3p/{id}',[AdminNa3pController::class,'update'])->middleware('admin','auth');
Route::get('/admin/p/na3p/{id}',[AdminNa3pController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/p/pemeliharaan',[AdminPemeliharaanController::class,'index'])->name('PembelajaranPemeliharaan')->middleware('admin','auth');
Route::get('/admin/p/pemeliharaan/create',[AdminPemeliharaanController::class,'create'])->middleware('admin','auth');
Route::post('/admin/p/pemeliharaan',[AdminPemeliharaanController::class,'store'])->middleware('admin','auth');
Route::get('/admin/p/pemeliharaan/{id}/edit',[AdminPemeliharaanController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/p/pemeliharaan/{id}',[AdminPemeliharaanController::class,'update'])->middleware('admin','auth');
Route::get('/admin/p/pemeliharaan/{id}',[AdminPemeliharaanController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/p/retail',[AdminRetailController::class,'index'])->name('PembelajaranRetail')->middleware('admin','auth');
Route::get('/admin/p/retail/create',[AdminRetailController::class,'create'])->middleware('admin','auth');
Route::post('/admin/p/retail',[AdminRetailController::class,'store'])->middleware('admin','auth');
Route::get('/admin/p/retail/{id}/edit',[AdminRetailController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/p/retail/{id}',[AdminRetailController::class,'update'])->middleware('admin','auth');
Route::get('/admin/p/retail/{id}',[AdminRetailController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/p/sarju',[AdminSarjuController::class,'index'])->name('PembelajaranSarju')->middleware('admin','auth');
Route::get('/admin/p/sarju/create',[AdminSarjuController::class,'create'])->middleware('admin','auth');
Route::post('/admin/p/sarju',[AdminSarjuController::class,'store'])->middleware('admin','auth');
Route::get('/admin/p/sarju/{id}/edit',[AdminSarjuController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/p/sarju/{id}',[AdminSarjuController::class,'update'])->middleware('admin','auth');
Route::get('/admin/p/sarju/{id}',[AdminSarjuController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/p/spap',[AdminSpapController::class,'index'])->name('PembelajaranSpap')->middleware('admin','auth');
Route::get('/admin/p/spap/create',[AdminSpapController::class,'create'])->middleware('admin','auth');
Route::post('/admin/p/spap',[AdminSpapController::class,'store'])->middleware('admin','auth');
Route::get('/admin/p/spap/{id}/edit',[AdminSpapController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/p/spap/{id}',[AdminSpapController::class,'update'])->middleware('admin','auth');
Route::get('/admin/p/spap/{id}',[AdminSpapController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/p/foc',[AdminFocController::class,'index'])->name('PembelajaranFOC')->middleware('admin','auth');
Route::get('/admin/p/foc/create',[AdminFocController::class,'create'])->middleware('admin','auth');
Route::post('/admin/p/foc',[AdminFocController::class,'store'])->middleware('admin','auth');
Route::get('/admin/p/foc/{id}/edit',[AdminFocController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/p/foc/{id}',[AdminFocController::class,'update'])->middleware('admin','auth');
Route::get('/admin/p/foc/{id}',[AdminFocController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/p/fot',[AdminFotController::class,'index'])->name('PembelajaranFOT')->middleware('admin','auth');
Route::get('/admin/p/fot/create',[AdminFotController::class,'create'])->middleware('admin','auth');
Route::post('/admin/p/fot',[AdminFotController::class,'store'])->middleware('admin','auth');
Route::get('/admin/p/fot/{id}/edit',[AdminFotController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/p/fot/{id}',[AdminFotController::class,'update'])->middleware('admin','auth');
Route::get('/admin/p/fot/{id}',[AdminFotController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/list-pembelajaran',[AdminListPembelajaranController::class,'index'])->name('AdminListPembelajaran')->middleware('admin','auth');
Route::get('/admin/list-pembelajaran/create',[AdminListPembelajaranController::class,'create'])->middleware('admin','auth');
Route::post('/admin/list-pembelajaran',[AdminListPembelajaranController::class,'store'])->middleware('admin','auth');
Route::get('/admin/list-pembelajaran/{id}/edit',[AdminListPembelajaranController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/list-pembelajaran/{id}',[AdminListPembelajaranController::class,'update'])->middleware('admin','auth');
Route::get('/admin/list-pembelajaran/{id}',[AdminListPembelajaranController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/gallery',[AdminGalleryController::class,'index'])->name('AdminGallery')->middleware('admin','auth');
Route::get('/admin/gallery/create',[AdminGalleryController::class,'create'])->middleware('admin','auth');
Route::post('/admin/gallery',[AdminGalleryController::class,'store'])->middleware('admin','auth');
Route::get('/admin/gallery/{id}/edit',[AdminGalleryController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/gallery/{id}',[AdminGalleryController::class,'update'])->middleware('admin','auth');
Route::get('/admin/gallery/{id}',[AdminGalleryController::class,'destroy'])->middleware('admin','auth');

Route::get('/admin/dashboard-penilaian',[AdminDashboardPenilaianController::class,'index'])->name('AdminDashboardPenilaian')->middleware('admin','auth');
Route::get('/admin/dashboard-penilaian/create',[AdminDashboardPenilaianController::class,'create'])->middleware('admin','auth');
Route::post('/admin/dashboard-penilaian',[AdminDashboardPenilaianController::class,'store'])->middleware('admin','auth');
Route::get('/admin/dashboard-penilaian/{id}/edit',[AdminDashboardPenilaianController::class,'edit'])->middleware('admin','auth');
Route::post('/admin/dashboard-penilaian/{id}',[AdminDashboardPenilaianController::class,'update'])->middleware('admin','auth');
Route::get('/admin/dashboard-penilaian/{id}',[AdminDashboardPenilaianController::class,'destroy'])->middleware('admin','auth');
