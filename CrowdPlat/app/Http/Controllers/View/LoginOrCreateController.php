<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginOrCreateController extends Controller
{
    public function index(){
        return view('pages.auth.login_or_create');
    }
}
