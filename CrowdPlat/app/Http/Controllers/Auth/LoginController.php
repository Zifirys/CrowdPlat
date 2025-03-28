<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('pages.auth.login');
    }

    public function login(Request $request){

        $remember = $request->has('remember');

        $user = $request->validate([
            'nickname' => 'required|string|min:3|max:50',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|regex:/[a-z]/|regex:/[0-9]/'
        ]);

        if (Auth::attempt($user, $remember)) {
            return redirect()->route('home')->with('success', 'Вы успешно залогинились!');
        }

        return redirect()->back()->withErrors(['error' => 'Не удалось идентифицировать пользователя'])->withInput();
    }
}
