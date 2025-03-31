<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('pages.auth.forgot_password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255|exists:users,email',
            'nickname' => 'required|string|min:3|max:50|exists:users,nickname',
        ]);

        $user = User::where('email', $request->email)
            ->where('nickname', $request->nickname)
            ->first();

        if (!$user) {
            return back()->withErrors([
                'email' => 'Пользователь с таким email и nickname не найден.',
            ]);
        }

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => 'Письмо с ссылкой для сброса пароля успешно отправлено. Пожалуйста, проверьте вашу почту.'])
            : back()->withErrors(['email' => __($status)]);
    }
}
