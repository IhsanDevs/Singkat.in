<?php


use App\Events\MessageCreated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShortController;
use App\Http\Controllers\SocialController;

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

Auth::routes();
Route::get('/', function () {

    if (Auth::check()) {
        return redirect()->route('home');
    } else {
        return "Halaman Guest";
    }
});

Route::get('auth/{provider}', [SocialController::class, 'redirect']);
Route::get('auth/{provider}/callback', [SocialController::class, 'Callback']);



Route::resource('cut', ShortController::class);

Route::get('/foo', function () {
    MessageCreated::dispatch('Info !', "Sapa kabar?");
    return "Notifikasi telah dikirim!";
});

Route::get('getUser', [UserController::class, 'api'])->name('users.api');

Route::middleware('auth')->group(function () {
    Route::resource('/users', UserController::class);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
