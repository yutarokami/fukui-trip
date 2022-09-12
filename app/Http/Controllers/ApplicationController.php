<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index() {
        return view('index');
    }

    public function showLogin() {
        return view('login.login_form');
    }

    public function login() {
        
    }
}