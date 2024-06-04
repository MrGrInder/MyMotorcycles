<?php

namespace app\Auth\Models;

use Core\Model;

class AuthModel extends Model
{
    /**
     * @param string $username
     * @param string $password
     * @param bool $rememberMe
     * @return bool
     */
    public function isLogin(string $username, string $password, bool $rememberMe): bool
    {
        if ($username === 'admin' && $password === 'password') {
            if ($rememberMe) {
                setcookie('login', $username, time() + 3600 * 24 * 30);
                setcookie('password', $password, time() + 3600 * 24 * 30);
            }

            return true;
        }

        return false;
    }
}
