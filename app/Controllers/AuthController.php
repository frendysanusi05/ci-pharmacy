<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Firebase\JWT\JWT;

class AuthController extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username != 'admin' || $password != 'password') {
            return $this->setResponseFormat('json')->respond(['message' => 'Invalid username or password']);
        }

        $key = getenv('JWT_SECRET');
        $iat = time();
        $exp = $iat + 3600;

        $payload = array([
            'iss'      => 'localhost',
            'iat'      => $iat,
            'exp'      => $exp,
            'username' => $username,
        ]);

        $token = JWT::encode($payload, $key, 'HS256');
        $this->response->setCookie('token', $token, 3600);

        session()->setFlashdata('success', 'Login successful');

        return redirect()->to('medicines')->withCookies('token', $token, 3600)->with('message', 'Login successful');
    }

    public function logout() {
        $this->response->deleteCookie('token');
        session()->setFlashdata('success', 'Logout successful');
        return redirect()->to('/')->withCookies('token', null);
    }
}
