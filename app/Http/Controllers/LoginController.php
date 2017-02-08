<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {

    public function login(Request $request) {
        return view('login.login');
    }

    public function logout(Request $request) {
        $request->session()->forget('user');
        return response()->redirectTo('/login');
    }
}