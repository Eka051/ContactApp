<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function login(Request $request) {
    //     $request->validate([
    //         'username' => 'required|string',
    //         'password' => 'required|string',
    //     ]);

    //     if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
    //         $user = Auth::user();
    //         return redirect()->route('home')->with('username', $user->username);

    //     }
    // }

    // public function home() {
    //     return view('home');
    // }
}
