<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function index(){

        $id_user = Auth::id();

        $user = User::find($id_user);

        return view('pages.auth.profil', compact('user'));
    }

    public function upload(Request $request) {
        $request->validate([
            'image_profile' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $user = Auth::user();
            $path = $request->file('image_profile')->store('img', 'public');

            // Удаляем старый аватар если он есть
            if ($user->image_path) {
                Storage::disk('public')->delete($user->image_path);
            }

            $user->image_path = $path;
            $user->save();

            return redirect()->route('profil')->with('success', 'Вы успешно обновили картинку.');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
}
