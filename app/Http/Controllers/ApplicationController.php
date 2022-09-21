<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    // indexページ
    public function index() {
        return view('index');
    }

    // loginページ
    public function showLogin() {
        return view('login');
    }

    // login処理
    public function login(LoginFormRequest $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('login_menu')->with('login_success','ログイン成功しました！');
        }

        return back()->withErrors([
            'email' => 'メールアドレスかパスワードが間違っています。',
        ])->onlyInput('email');
    }

    /**
     * ユーザーをアプリケーションからログアウトさせる
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('showLogin')->with('logout','ログアウトしました！');
    }

    // searchページ
    public function search() {
        return view('search');
    }
    // postページ
    public function post() {
        return view('post');
    }


}