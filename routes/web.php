<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });ll

// トップ画面
Route::get('/', [ApplicationController::class, 'index'])->name('index');

// ログイン前のUser=guest
Route::middleware(['guest'])->group(function () {
    // ログインフォーム表示
    Route::get('/login', [ApplicationController::class, 'showLogin'])->name('showLogin');
    // ログイン処理
    Route::post('/login_menu', [ApplicationController::class, 'login'])->name('login');
});

// ログイン後のUser=auth
Route::middleware(['auth'])->group(function () {
    
    Route::get('login_menu', function() {
        return view('login_menu');
    })->name('login_menu');

    // ログアウト
    Route::post('logout', [ApplicationController::class, 'logout'])->name('logout');

    // searchページを表示
    Route::get('/search', [ApplicationController::class, 'search'])->name('search');
    // postページを表示
    Route::get('/post', [ApplicationController::class, 'post'])->name('post');
    // myページを表示
});


