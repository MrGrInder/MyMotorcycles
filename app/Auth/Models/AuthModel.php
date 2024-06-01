<?php

namespace app\Auth\Models;

use core\Model;

class AuthModel extends Model
{
    public function login($username, $password, $rememberMe)
    {
        // Check the user's credentials
        if ($username === 'admin' && $password === 'password') {
            if ($rememberMe) {
                setcookie('login', $username, time() + 3600 * 24 * 30);
                setcookie('password', $password, time() + 3600 * 24 * 30);
            }

            // Redirect to the file manager
            return true;
        }

        return false;
    }
}
