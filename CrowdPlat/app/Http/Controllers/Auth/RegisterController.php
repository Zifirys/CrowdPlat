<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('pages.auth.register');
    }

    public function store(Request $request){

        $data = $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'nickname' => 'required|string|min:3|max:50',
            'email' => 'required|email|max:255|unique:users,email',
            'email_confirmation' => 'required|email|max:255|same:email',
            'password' => 'required|string|min:8|regex:/[a-z]/|regex:/[0-9]/|confirmed',
        ]);

        $data['password'] = Hash::make($data['password']);

        try {
            DB::beginTransaction();

            $user = User::create($data);
            Auth::login($user);

            event(new Registered($user));

            DB::commit();

            return redirect()->route('home')->with('success', 'Вы успешно зарегистрированы!');
        } catch (\Throwable $e) { //ловит любые ошибки и исключения, включая фатальные

            DB::rollBack();

            return redirect()->back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }
}
