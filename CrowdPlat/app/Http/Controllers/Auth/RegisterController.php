<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.auth.register');
    }

    public function store(Request $request)
    	{
        	// валидация
        	// $data = $request->validate([
            // 	'first_name' => 'string|max:255|trim',
            //     'last_name' => 'string|max:255|trim',
            //     'nickname' => 'required|min:3|max:50|unique:users,nickname|trim',
            //     'email' => 'required|email|max:255|unique:users,email|trim',
            //     'email_confirmation' => 'required|email|max:255|same:email|trim',
            //     'password' => 'required|string|min:8|confirmed|regex:/[a-z]/|regex:/[0-9]/',
       		// ]);

        	// $user = new User();
        	// $user->fill($data);
        	// $user->save();

        	return redirect()->route('home');
    	}

}
