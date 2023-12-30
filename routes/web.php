<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
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

Route::get('/email/verify', function () {
    return view('verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    $userId = $request->user()->id;
    event(new Verified($request->user()));
    return redirect()->route('dashboard',['id'=>$userId]);
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth'])->name('verification.send');


Route::get('/forget', function () {
    return view('forget');
})->name('password.request');

Route::post('/forget', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');

//Route::get('/reset/{token}', function (string $token) {
//    return view('reset', ['token' => $token]);
//})->name('password.reset');

Route::get('/reset/{token}',[\App\Http\Controllers\UserController::class,'showResetForm'])->name('password.reset');

Route::post('/reset', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => $password,
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('alter2')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->name('password.update');




Route::post('/insert',[\App\Http\Controllers\UserController::class,'storeInfo'])->name('insert');

Route::post('Logged',[\App\Http\Controllers\UserController::class,'Login'])->name('Logged');

Route::post('/update',[\App\Http\Controllers\UserController::class,'updateprofile'])->name('update');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/alter', function () {
    return view('alter');
})->name('alter');

Route::get('/alter2', function () {
    return view('alter2');
})->name('alter2');

Route::get('/dashboard2', function () {
    return view('dashboard2');
})->name('dashboard2');

Route::get('/tools', function () {
    return view('tools');
})->name('tools');

Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');

Route::get('/alternatelogin', function () {
    return view('alternatelogin');
})->name('alternatelogin');



Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard/{id}',[\App\Http\Controllers\UserController::class,'dash'])->name('dashboard');
    Route::get('/editprofile/{id}', function () {
        return view('editprofile');
    })->name('editprofile');

    Route::get('/editprofile/{id}',[\App\Http\Controllers\UserController::class,'edit'])->name('editprofile');
    Route::get('/profile/{id}',[\App\Http\Controllers\UserController::class,'profiles'])->name('profile');


Route::get('/productqr/{id}',[\App\Http\Controllers\UserController::class,'productqrandbar'])->name('productqr');

Route::post('/products',[\App\Http\Controllers\UserController::class,'productupload'])->name('products');

Route::get('/theqr/{id}/{product}',[\App\Http\Controllers\UserController::class,'the'])->name('theqr');

Route::get('/emailqr/{id}',[\App\Http\Controllers\UserController::class,'email'])->name('emailqr');

Route::post('/emailupload',[\App\Http\Controllers\UserController::class,'emailupload'])->name('emailupload');

Route::get('/theqr2/{id}/{product}',[\App\Http\Controllers\UserController::class,'the2'])->name('theqr2');

Route::get('/history/{id}',[\App\Http\Controllers\UserController::class,'historypage'])->name('history');

Route::get('/smsqr/{id}',[\App\Http\Controllers\UserController::class,'sms'])->name('smsqr');

Route::post('/smsupload',[\App\Http\Controllers\UserController::class,'smsupload'])->name('smsupload');

Route::get('/theqr3/{id}/{product}',[\App\Http\Controllers\UserController::class,'the3'])->name('theqr3');

Route::get('/wifiqr/{id}',[\App\Http\Controllers\UserController::class,'wifi'])->name('wifiqr');

Route::post('/wifiupload',[\App\Http\Controllers\UserController::class,'wifiupload'])->name('wifiupload');

Route::get('/theqr4/{id}/{product}',[\App\Http\Controllers\UserController::class,'the4'])->name('theqr4');

Route::get('/locationqr/{id}',[\App\Http\Controllers\UserController::class,'location'])->name('locationqr');

Route::post('/locationupload',[\App\Http\Controllers\UserController::class,'locationupload'])->name('locationupload');

Route::get('/theqr5/{id}/{product}',[\App\Http\Controllers\UserController::class,'the5'])->name('theqr5');

Route::get('/urlqr/{id}',[\App\Http\Controllers\UserController::class,'url'])->name('urlqr');

Route::post('/urlupload',[\App\Http\Controllers\UserController::class,'urlupload'])->name('urlupload');

Route::get('/theqr6/{id}/{product}',[\App\Http\Controllers\UserController::class,'the6'])->name('theqr6');

Route::get('/contactqr/{id}',[\App\Http\Controllers\UserController::class,'contact'])->name('contactqr');

    Route::post('/contactupload',[\App\Http\Controllers\UserController::class,'contactupload'])->name('contactupload');


    Route::get('/theqr7/{id}/{product}',[\App\Http\Controllers\UserController::class,'the7'])->name('theqr7');

});
