<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function login(Request $request) {
        $user = $request->get('user');
        $password = $request->get('password');
        var_dump($user, $password);
    }

}