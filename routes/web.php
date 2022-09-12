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
Route::get('/', [ApplicationController::class, 'index']);

// ログインフォーム表示
Route::get('/login', [ApplicationController::class, 'showLogin'])->name('showLogin');

// ログイン処理
Route::post('/login/login', [ApplicationController::class, 'login'])->name('login');