<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\CastController;

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
    return view('page.home');
});

Route::get('/genre', function () {
    return view('page.film');
});

Route::get('/contact', function () {
    return view('page.contact');
});
Route::get('/tambah', function () {
    return view('fitur/tambah');
});


Route::get('/tambahcast', function () {
    return view('cast.add');
});

Route::middleware(['Auth'])->group(function () {
    
    
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('genre', GenreController::class);
Route::resource('film', FilmController::class);
Route::resource('tambah', TambahController::class);
Route::resource('cast', CastController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('/kritik/{id}', [KritikController::class,'store']);  

