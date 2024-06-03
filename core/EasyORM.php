<?php

namespace Core;

use PDO;

class EasyORM
{
    private $connection;

    public function __construct()
    {
        $dbConfigs = require_once '../config/database.php';
        $this->connection = new PDO("mysql:host={$dbConfigs['host']};dbname={$dbConfigs['dbname']}", $dbConfigs['username'], $dbConfigs['password']);
    }

    /**
     * @return array|false
     */
    public function getAllData()
    {
        $statement = $this->connection->prepare('SELECT * FROM my_table');
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getDataById(int $id)
    {
        $statement = $this->connection->prepare('SELECT * FROM my_table WHERE id = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
