<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemAuthController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckoutController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [SistemAuthController::class, 'home']);
Route::resource('tamu',TamuController::class);
Route::resource('kamar',KamarController::class);
Route::resource('checkin',CheckinController::class);
Route::resource('checkout',CheckoutController::class);
Route::get('dashboard', [SistemAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [SistemAuthController::class, 'index'])->name('login');
Route::post('postlogin', [SistemAuthController::class, 'login'])->name('postlogin'); 
Route::get('signup', [SistemAuthController::class, 'signup'])->name('register-user');
Route::post('postsignup', [SistemAuthController::class, 'signupsave'])->name('postsignup'); 
Route::get('signout', [SistemAuthController::class, 'signOut'])->name('signout');