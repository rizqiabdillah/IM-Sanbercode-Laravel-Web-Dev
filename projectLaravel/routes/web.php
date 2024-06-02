<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Http;

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

//entpoint
Route::get('/', [HomeController::class, 'utama']);

Route::get('/register', [AuthController::class, 'daftar']);

Route::post('/welcome', [AuthController::class, 'welcome']);

// Route::get('/master', function(){
//     return view('layouts.master');
// });
Route::get('/table', function() {
    return view('page.Table');
});


Route::get('/data-table', function() {
    return view('page.dataTable');
});

//CRUD Cast
// C =>
Route::get('/cast/create', [CastController::class, 'create']);
//tambah ke database
Route::post('/cast', [CastController::class, 'store']);

//read
Route::get('/cast', [CastController::class, 'index']);

//detail kategori berdasarkan id
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

//update
//form update cast

Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);

//update data ke database berdasarkan id
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

//delete
//delete berdasarkan id
Route::delete('cast/{cast_id}', [CastController::class, 'destroy']);

//CRUD Genre
Route::get('/genre/create', [GenreController::class, 'create']);
//tambah ke database
Route::post('/genre', [GenreController::class, 'store']);
//read
Route::get('/genre', [GenreController::class, 'index']);
//detail kategori berdasarkan id
Route::get('/genre/{genre_id}', [GenreController::class, 'show']);
//update
//form update genre
Route::get('/genre/{genre_id}/edit', [GenreController::class, 'edit']);
//update data ke database berdasarkan id
Route::put('/genre/{genre_id}', [GenreController::class, 'update']);
//delete
//delete berdasarkan id
Route::delete('genre/{genre_id}', [GenreController::class, 'destroy']);

//CRUD Film
Route::resource('film', FilmController::class);

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

