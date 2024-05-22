<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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