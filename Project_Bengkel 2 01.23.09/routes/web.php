<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/penjualan', function () {
    return view('penjualan');
});
Route::get('/produk-kelistrikan', function () {
    return view('kelistrikan');
});
Route::get('/produk-mesin', function () {
    return view('mesin');
});
Route::get('/produk-aksesoris', function () {
    return view('aksesoris');
});
Route::get('/produk-cover-body', function () {
    return view('coverbody');
});
Route::get('/produk', function () {
    return view('product');
});
Route::get('/dan-lain-lain', function () {
    return view('dll');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
