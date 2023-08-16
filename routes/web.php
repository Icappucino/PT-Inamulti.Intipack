<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\CareerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage.beranda');
});
Route::get('/Beranda', function () {
    return view('landingpage.beranda');
});
Route::get('/About', function () {
    return view('landingpage.about');
});
Route::get('/Product', function () {
    return view('landingpage.product');
});
Route::get('/Career', function () {
    return view('landingpage.career');
});
Route::get('/Peluang-Bisnis', function () {
    return view('landingpage.peluang-bisnis');
});
Route::get('/Contact', function () {
    return view('landingpage.contact');
});
Route::get('/Polyester-Product-Details', function () {
    return view('landingpage.polyester');
});
// Produk Section
Route::get('/Polyester-Astroll-Details', function () {
    return view('landingpage.astroll');
});
Route::get('/Nylon-Amidroll-Details', function () {
    return view('landingpage.amidroll');
});
Route::get('/Nylon-Kofil-Details', function () {
    return view('landingpage.kofil');
});
/* for Admin */
Route::get('/Admin-Page-Admin-Dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');
Route::get('/Account-Admin', function () {
    return view('admin.account');
})->middleware('auth');
Route::get('/Job-Career', function () {
    return view('admin.job-career');
})->middleware('auth');
Route::get('/Posting-Product', function () {
    return view('admin.product');
});

/* Route Controllers */
Route::resource('/Recruitment', RecruitmentController::class);
Route::resource('/Career', CareerController::class);
// routes/web.php
Route::get('/career/create', [CareerController::class, 'create'])->name('career.create')->middleware('auth');
Route::post('/career/store', [CareerController::class, 'store'])->name('career.store')->middleware('auth');
Route::get('/recruitment/create', [RecruitmentController::class, 'create'])->name('recruitment.create');
Route::post('/recruitment/store', [RecruitmentController::class, 'store'])->name('recruitment.store');
Route::get('/recruitment/{id}', [RecruitmentController::class, 'show'])->name('recruitment.show')->middleware('auth');
//tambahan untuk menghapus career
Route::delete('/career/{id}', [CareerController::class, 'destroy'])
    ->name('career.destroy')
    ->middleware('auth');
Route::delete('/recruitment/{id}', [RecruitmentController::class, 'destroy'])
    ->name('recruitment.destroy')
    ->middleware('auth');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
