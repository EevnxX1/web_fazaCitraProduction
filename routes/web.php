<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('homeuser.index');
});



Route::get('/store', function () {
    return view('store-book');
});

Route::get('/coming', function () {
    return view('coming-soon');
});

Route::get('/detail-coming', function () {
    return view('detail-comingsoon');
});

Route::get('/detail', function () {
    return view('detail-books');
});

Route::get('/form-detail', function () {
    return view('form-detailbook');
});

Route::get('/indie', function () {
    return view('indie');
});

Route::get('/self', function () {
    return view('self-publish');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/kelas-menulis', function () {
    return view('kelas-menulis');
});

Route::get('/kelas-editing', function () {
    return view('kelas-editing');
});

Route::get('/jasa', function () {
    return view('jasa');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/detail-blog', function () {
    return view('detail-blog');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/admin', function () {
    return view('admin.table');
});

Route::get('/form', function () {
    return view('admin.form');
});

Route::get('/login', [App\Http\Controllers\userController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [App\Http\Controllers\userController::class, 'authenticate']);
Route::get('/home', function () {
    return redirect()->route('dashboard.index');
});
Route::get('/logout', [App\Http\Controllers\userController::class, 'logout']);

Route::resource('dashboard', App\Http\Controllers\dashboardController::class);
Route::resource('buku', App\Http\Controllers\BukuController::class);
Route::resource('bestseller', App\Http\Controllers\BestsellerController::class);
Route::resource('comingsoon', App\Http\Controllers\ComingsoonController::class);
Route::resource('recommendation', App\Http\Controllers\RecommendationController::class);
Route::resource('news', App\Http\Controllers\NewsController::class);
Route::resource('penjualan', App\Http\Controllers\PenjualanController::class);
Route::get('/news.index', [App\Http\Controllers\NewsController::class, 'index']);
Route::resource('homeuser', App\Http\Controllers\BestuserController::class);
Route::resource('bukuuser', App\Http\Controllers\BukuuserController::class);
Route::resource('comingsoonuser', App\Http\Controllers\ComingsoonuserController::class);
Route::resource('bloguser', App\Http\Controllers\BloguserController::class);
Route::resource('formbookuser', App\Http\Controllers\PenjualanuserController::class);
Route::resource('storebookuser', App\Http\Controllers\StoreuserController::class);



