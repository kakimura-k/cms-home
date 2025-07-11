<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/test/func',[TestController::class,'func']);{
    return view('welcome');
};*/

Route::get('login', [LoginController::class, 'show']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//入力フォームページ
Route::get('/contact', [ContactsController::class, 'index'])->name('contact.index');
//確認フォームページ
Route::post('/contact/confirm', [ContactsController::class, 'confirm'])->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks', [ContactsController::class, 'send'])->name('contact.send');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/loginhome', [ContactsController::class, 'index'])->name('contact.index');