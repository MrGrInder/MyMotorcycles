<?php

namespace app\Auth\Controllers;

use Core\Controller;
use app\Auth\Models\AuthModel;

class AuthController extends Controller
{
    /**
     * @return void
     */
    public function index(): void
    {
        $errorMessage = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $rememberMe = isset($_POST['remember_me']) && $_POST['remember_me'] === 'on';

            $authModel = new AuthModel();
            if ($authModel->isLogin($login, $password, $rememberMe)) {
                header('Location: '. $this->config['base_url']. '/FileManager/index');
                exit;
            } else {
                $errorMessage = 'Invalid username or password';
            }
        }

        $this->view('auth/login', ['errorMessage' => $errorMessage]);
    }
}
