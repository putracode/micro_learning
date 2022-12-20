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
use App\Http\Controllers\Admin\AdminPembelajaranController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\App\DashboardPenilaianController;
use App\Models\User;
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
    return view('test',['user' => User::all()]);
});

// Route::get('/index', function ($id) {
//     return view('edit',[
//         'user' => User::find($id)
//     ]);
// });

// LOGIN
Route::get('/login',[LoginController::class,'indexLogin'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate'])->middleware('guest');
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth');
Route::get('/register',[LoginController::class,'indexRegister'])->middleware('guest');
Route::post('/register',[LoginController::class,'store'])->middleware('guest');
Route::get('/change-password',[ChangePasswordController::class,'change'])->middleware('auth','approved');
Route::post('/change-password',[ChangePasswordController::class,'changePassword'])->middleware('auth','approved');

Route::get('/forgot-password',[ChangePasswordController::class,'getforgotpassword'])->middleware('guest')->name('getforgotpassword');
Route::post('/forgot-password',[ChangePasswordController::class,'postforgotpassword'])->middleware('guest');
Route::get('/reset-password/{token}',[ChangePasswordController::class,'getresetpassword'])->middleware('guest')->name('getresetpassword');
Route::post('/reset-password/{token}',[ChangePasswordController::class,'postresetpassword'])->middleware('guest');


Route::get('/',[HomeController::class,'index'])->middleware('guest');
Route::middleware(['auth','approved','newpassword'])->group(function(){
    
    // HOME
    Route::get('/home',[HomeController::class,'indexHome']);
    
    // LIST PEMBELAJARAN
    Route::get('/list-pembelajaran',[HomeController::class,'indexListPembelajaran'])->name('list-pembelajaran');

    // Pembelajaran
    Route::get('/pembelajaran',[PembelajaranController::class,'page'])->name('pembelajaran');
    Route::get('/pembelajaran/{pembelajaran:slug}',[PembelajaranController::class,'index']);
    Route::get('/pembelajaran/{pembelajaran:slug}/video/{materi:slug}',[PembelajaranController::class,'materi']);
    Route::get('/pembelajaran/{pembelajaran:slug}/quiz/{materi:slug}',[PembelajaranController::class,'quiz']);

    // Tentang Kami
    Route::get('/tentang-aplikasi',[TentangAplikasiController::class,'index'])->name('tentang-aplikasi');
    
    // List Pembelajaran
    Route::get('/list-pembelajaran',[ListPembelajaranController::class,'index'])->name('list-pembelajaran');
    
    // Gallery
    Route::get('/galeri',[GalleryController::class,'index'])->name('gallery')->middleware('internal');
    
    // Dashboard Penilaian
    Route::get('/dashboard-penilaian',[DashboardPenilaianController::class,'index'])->name('gallery');
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

    
    Route::resource('/admin/materi',MateriController::class);
    Route::resource('/admin/pembelajaran',AdminPembelajaranController::class);

    Route::get('/admin/slugMateri',[MateriController::class,'slugMateri']);
    Route::get('/admin/slugPembelajaran',[MateriController::class,'slugPembelajaran']);
});
