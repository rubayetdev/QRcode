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
    return view('welcome');
});

Route::post('/insert',[\App\Http\Controllers\UserController::class,'storeInfo'])->name('insert');

Route::post('Logged',[\App\Http\Controllers\UserController::class,'Login'])->name('Logged');

Route::get('/profile/{id}',[\App\Http\Controllers\UserController::class,'profiles'])->name('profile');

//Route::get('/profile/{user}', function () {
//    return view('profile');
//})->name('profile');
