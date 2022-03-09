<?php

use App\Http\Controllers\auth\SocialAuthController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('front/Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/account',function(){
    return Inertia::render('front/Account');
})->name('account');
Route::get('/shop',function(){
    return Inertia::render('front/Shop');
})->name('shop');
Route::get('/login',function(){
    return Inertia::render('front/Login');
})->name('login');

/**
 * Google authentication
 */
Route::get('/auth/google/redirect',[SocialAuthController::class, 'googleredirect'])->name('google');
Route::get('/auth/google/callback',[SocialAuthController::class, 'googlecallback']);


Route::middleware(['auth:sanctum', 'verified','authrole'])->get('/dashboard', function () {
    return Inertia::render('App');
})->name('dashboard');
