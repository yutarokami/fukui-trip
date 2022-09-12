<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index() {
        return view('index');
    }

    public function showLogin() {
        return view('login.login_form');
    }

    public function login(LoginFormRequest $request) {
        dd($request->all());
    }
}