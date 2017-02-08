<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    public function login(Request $request) {
        $user = $request->get('user');
        $password = $request->get('password');

        try {
            $client = new Client(['base_uri' => env('AUTH_API')]);
            $response = $client->request('GET', '/token', ['auth' => [$user, sha1($password)]]);
            $request->session()->set('user', json_decode($response->getBody()->getContents()));
            return response()->json(['data' => 'ok'], $response->getStatusCode());
        } catch (ClientException $e) {
            $response = json_decode($e->getResponse()->getBody()->getContents());
            return response()->json(['error' => $response], $e->getResponse()->getStatusCode());
        }
    }

}