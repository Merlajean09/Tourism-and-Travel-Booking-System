<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

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
    return view('welcome');
});

// Auth::routes();

Route::get('/home' , [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class);
<<<<<<< HEAD
// Route::resource('abouts', AboutController::class);
=======
Route::resource('booking', BookingController::class);
>>>>>>> 239358f9bb9e1bf21c8106fc79bf8e5916a49227

