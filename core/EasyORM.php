<?php

namespace Core;

use PDO;
use PDOException;

class EasyORM
{
    public static function getConnection(): PDO
    {
        $dbConfigs = require_once '../config/database.php';
        try {
            $a = new PDO("mysql:host={$dbConfigs['host']};port={$dbConfigs['port']};dbname={$dbConfigs['dbname']}", $dbConfigs['username'], $dbConfigs['password']);
        } catch (PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        return new PDO("mysql:host={$dbConfigs['host']};dbname={$dbConfigs['dbname']}", $dbConfigs['username'], $dbConfigs['password']);
    }
}
