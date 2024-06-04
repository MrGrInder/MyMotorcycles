<?php

namespace app\Motorcycles\Models;

use Core\EasyORM;
use Core\Model;
use PDO;

class MotorcyclesModel extends Model
{
    /**
     * @return array|false
     */
    public function getAllMotorcycles()
    {
        $connection = (new EasyORM)->getConnection();
        $request = $connection->prepare('SELECT * FROM moto_nomenclature');
        $request->execute();

        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getDataById(int $id)
    {
        $connection = (new EasyORM)->getConnection();
        $request = $connection->prepare('SELECT * FROM moto_nomenclature WHERE id = :id');
        $request->bindParam(':id', $id, PDO::PARAM_INT);
        $request->execute();

        return $request->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param array $filter
     * @return mixed
     */
    public function getWithType(array $filter = [])
    {
        $connection = (new EasyORM)->getConnection();

        if (empty($filter)) {
            $request = $connection->prepare('SELECT moto.*, type.type AS brand FROM moto_nomenclature AS moto INNER JOIN moto_type AS type ON moto.id_type = type.id');
            $request->execute();
            return $request->fetchAll(PDO::FETCH_ASSOC);
        }

        $start = true;
        $whereString = '';

        foreach ($filter as $key => $value) {
            $whereString .= $key.'= :'. $key;
            $whereString .= (!$start) ? 'AND ' : '';
            $start = false;
        }

        $whereString = "WHERE {$whereString}";

        $request = $connection->prepare("SELECT moto.*, type.type AS brand FROM moto_nomenclature AS moto INNER JOIN moto_type AS type ON moto.id_type = type.id {$whereString}");

        foreach ($filter as $key => $value) {
            $type = PDO::PARAM_INT;

            switch (gettype($value)) {
                case 'boolean':
                    $type = PDO::PARAM_BOOL;
                    break;
                case'string':
                    $type = PDO::PARAM_STR;
                    break;
            }

            $request->bindParam(':'. $key, $value, $type);
        }

        $request->execute();

        return $request->fetchAll(PDO::FETCH_ASSOC);
    }
}
