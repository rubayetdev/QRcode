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
    return view('homepage');
})->name('home');

Route::post('/insert',[\App\Http\Controllers\UserController::class,'storeInfo'])->name('insert');

Route::post('Logged',[\App\Http\Controllers\UserController::class,'Login'])->name('Logged');

Route::post('/update',[\App\Http\Controllers\UserController::class,'updateprofile'])->name('update');

Route::get('/profile/{id}',[\App\Http\Controllers\UserController::class,'profiles'])->name('profile');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/alternatelogin', function () {
    return view('alternatelogin');
})->name('alternatelogin');

Route::get('/editprofile/{id}', function () {
    return view('editprofile');
})->name('editprofile');

Route::get('/editprofile/{id}',[\App\Http\Controllers\UserController::class,'edit'])->name('editprofile');
//Route::get('/profile/{user}', function () {
//    return view('profile');
//})->name('profile');
