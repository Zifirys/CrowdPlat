<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index(){

        $id_user = Auth::id();

        $user = User::find($id_user);

        return view('pages.auth.profil', compact('user'));
    }
}
