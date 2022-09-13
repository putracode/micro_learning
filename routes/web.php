<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\App\PostController;

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\App\PembelajaranController;
use App\Http\Controllers\Admin\ListPembelajaranController;
use App\Http\Controllers\Admin\Pembelajaran\AdminNa3pController;
use App\Http\Controllers\Admin\Pembelajaran\AdminSpapController;
use App\Http\Controllers\Admin\Pembelajaran\AdminAklikController;
use App\Http\Controllers\Admin\Pembelajaran\AdminAklisController;
use App\Http\Controllers\Admin\Pembelajaran\AdminSarjuController;
use App\Http\Controllers\Admin\Pembelajaran\AdminRetailController;
use App\Http\Controllers\Admin\Pembelajaran\AdminPemeliharaanController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// LOGIN
Route::get('/',[LoginController::class,'indexLogin'])->name('login')->middleware('guest');
Route::post('/',[LoginController::class,'authenticate'])->middleware('guest');
Route::post('/logout',[LoginController::class,'logout']);
Route::get('/register',[LoginController::class,'indexRegister'])->middleware('guest');
Route::post('/register',[LoginController::class,'store'])->middleware('guest');

// HOME
Route::get('/home',[HomeController::class,'index'])->middleware('auth');

// LIST PEMBELAJARAN
Route::get('/home/list-pembelajaran',[HomeController::class,'indexListPembelajaran'])->name('list-pembelajaran');

// PEMBELAJARAN
Route::get('/home/p/bidang-aktivasi-publik',[PembelajaranController::class,'indexAKLIK'])->name('indexAKLIK');
Route::get('/home/p/bidang-aktivasi-listrik',[PembelajaranController::class,'indexAKLIS'])->name('indexAKLIS');
Route::get('/home/p/bidang-NA3P',[PembelajaranController::class,'indexNA3P'])->name('indexNA3P');
Route::get('/home/p/bidang-pemeliharaan',[PembelajaranController::class,'indexPEMELIHARAAN'])->name('indexPEMELIHARAAN');
Route::get('/home/p/bidang-retail',[PembelajaranController::class,'indexRETAIL'])->name('indexRETAIL');
Route::get('/home/p/bidang-SPAP',[PembelajaranController::class,'indexSPAP'])->name('indexSPAP');
Route::get('/home/p/bidang-sarju',[PembelajaranController::class,'indexSARJU'])->name('indexSARJU');

// MATERI
Route::get('/home/p/materi-aklik/{post:id}',[PembelajaranController::class,'materiAKLIK']);
Route::get('/home/p/materi-aklis/{post:id}',[PembelajaranController::class,'materiAKLIS']);
Route::get('/home/p/materi-na3p/{post:id}',[PembelajaranController::class,'materiNA3P']);
Route::get('/home/p/materi-pemeliharaan/{post:id}',[PembelajaranController::class,'materiPEMELIHARAAN']);
Route::get('/home/p/materi-retail/{post:id}',[PembelajaranController::class,'materiRETAIL']);
Route::get('/home/p/materi-spap/{post:id}',[PembelajaranController::class,'materiSPAP']);
Route::get('/home/p/materi-sarju/{post:id}',[PembelajaranController::class,'materiSARJU']);

// QUIZ
Route::get('/home/p/quiz-aklik/{post:id}',[PembelajaranController::class,'quizAKLIK']);
Route::get('/home/p/quiz-aklis/{post:id}',[PembelajaranController::class,'quizAKLIS']);
Route::get('/home/p/quiz-na3p/{post:id}',[PembelajaranController::class,'quizNA3P']);
Route::get('/home/p/quiz-pemeliharaan/{post:id}',[PembelajaranController::class,'quizPEMELIHARAAN']);
Route::get('/home/p/quiz-retail/{post:id}',[PembelajaranController::class,'quizRETAIL']);
Route::get('/home/p/quiz-spap/{post:id}',[PembelajaranController::class,'quizSPAP']);
Route::get('/home/p/quiz-sarju/{post:id}',[PembelajaranController::class,'quizSARJU']);








// ADMIN

Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/admin/user',[RegisterController::class,'index'])->name('user')->middleware('admin');
Route::get('/admin/user/create',[RegisterController::class,'create'])->middleware('admin');
Route::post('/admin/user',[RegisterController::class,'store'])->middleware('admin');
Route::get('/admin/user/{id}/edit',[RegisterController::class,'edit'])->middleware('admin');
Route::post('/admin/user/{id}',[RegisterController::class,'update'])->middleware('admin');
Route::get('/admin/user/{id}',[RegisterController::class,'destroy'])->middleware('admin');

Route::get('/admin/p/aklik',[AdminAklikController::class,'index'])->name('PembelajaranAklik')->middleware('admin');
Route::get('/admin/p/aklik/create',[AdminAklikController::class,'create'])->middleware('admin');
Route::post('/admin/p/aklik',[AdminAklikController::class,'store'])->middleware('admin');
Route::get('/admin/p/aklik/{id}/edit',[AdminAklikController::class,'edit'])->middleware('admin');
Route::post('/admin/p/aklik/{id}',[AdminAklikController::class,'update'])->middleware('admin');
Route::get('/admin/p/aklik/{id}',[AdminAklikController::class,'destroy'])->middleware('admin');

Route::get('/admin/p/aklis',[AdminAklisController::class,'index'])->name('PembelajaranAklis')->middleware('admin');
Route::get('/admin/p/aklis/create',[AdminAklisController::class,'create'])->middleware('admin');
Route::post('/admin/p/aklis',[AdminAklisController::class,'store'])->middleware('admin');
Route::get('/admin/p/aklis/{id}/edit',[AdminAklisController::class,'edit'])->middleware('admin');
Route::post('/admin/p/aklis/{id}',[AdminAklisController::class,'update'])->middleware('admin');
Route::get('/admin/p/aklis/{id}',[AdminAklisController::class,'destroy'])->middleware('admin');

Route::get('/admin/p/na3p',[AdminNa3pController::class,'index'])->name('PembelajaranNa3p')->middleware('admin');
Route::get('/admin/p/na3p/create',[AdminNa3pController::class,'create'])->middleware('admin');
Route::post('/admin/p/na3p',[AdminNa3pController::class,'store'])->middleware('admin');
Route::get('/admin/p/na3p/{id}/edit',[AdminNa3pController::class,'edit'])->middleware('admin');
Route::post('/admin/p/na3p/{id}',[AdminNa3pController::class,'update'])->middleware('admin');
Route::get('/admin/p/na3p/{id}',[AdminNa3pController::class,'destroy'])->middleware('admin');

Route::get('/admin/p/pemeliharaan',[AdminPemeliharaanController::class,'index'])->name('PembelajaranPemeliharaan')->middleware('admin');
Route::get('/admin/p/pemeliharaan/create',[AdminPemeliharaanController::class,'create'])->middleware('admin');
Route::post('/admin/p/pemeliharaan',[AdminPemeliharaanController::class,'store'])->middleware('admin');
Route::get('/admin/p/pemeliharaan/{id}/edit',[AdminPemeliharaanController::class,'edit'])->middleware('admin');
Route::post('/admin/p/pemeliharaan/{id}',[AdminPemeliharaanController::class,'update'])->middleware('admin');
Route::get('/admin/p/pemeliharaan/{id}',[AdminPemeliharaanController::class,'destroy'])->middleware('admin');

Route::get('/admin/p/retail',[AdminRetailController::class,'index'])->name('PembelajaranRetail')->middleware('admin');
Route::get('/admin/p/retail/create',[AdminRetailController::class,'create'])->middleware('admin');
Route::post('/admin/p/retail',[AdminRetailController::class,'store'])->middleware('admin');
Route::get('/admin/p/retail/{id}/edit',[AdminRetailController::class,'edit'])->middleware('admin');
Route::post('/admin/p/retail/{id}',[AdminRetailController::class,'update'])->middleware('admin');
Route::get('/admin/p/retail/{id}',[AdminRetailController::class,'destroy'])->middleware('admin');

Route::get('/admin/p/sarju',[AdminSarjuController::class,'index'])->name('PembelajaranSarju')->middleware('admin');
Route::get('/admin/p/sarju/create',[AdminSarjuController::class,'create'])->middleware('admin');
Route::post('/admin/p/sarju',[AdminSarjuController::class,'store'])->middleware('admin');
Route::get('/admin/p/sarju/{id}/edit',[AdminSarjuController::class,'edit'])->middleware('admin');
Route::post('/admin/p/sarju/{id}',[AdminSarjuController::class,'update'])->middleware('admin');
Route::get('/admin/p/sarju/{id}',[AdminSarjuController::class,'destroy'])->middleware('admin');

Route::get('/admin/p/spap',[AdminSpapController::class,'index'])->name('PembelajaranSpap')->middleware('admin');
Route::get('/admin/p/spap/create',[AdminSpapController::class,'create'])->middleware('admin');
Route::post('/admin/p/spap',[AdminSpapController::class,'store'])->middleware('admin');
Route::get('/admin/p/spap/{id}/edit',[AdminSpapController::class,'edit'])->middleware('admin');
Route::post('/admin/p/spap/{id}',[AdminSpapController::class,'update'])->middleware('admin');
Route::get('/admin/p/spap/{id}',[AdminSpapController::class,'destroy'])->middleware('admin');


