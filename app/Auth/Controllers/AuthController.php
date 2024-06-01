<?php

namespace app\Auth\Controllers;

use core\Controller;
use app\Auth\Models\AuthModel;

class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $rememberMe = isset($_POST['remember_me']) && $_POST['remember_me'] === 'on';

            $authModel = new AuthModel();
            if ($authModel->login($username, $password, $rememberMe)) {
                header('Location: '. $this->config['base_url']. '/file_manager');
                exit;
            } else {
                $errorMessage = 'Invalid username or password';
            }
        }

        $this->view('auth/login', ['errorMessage' => $errorMessage?? null]);
    }
}
