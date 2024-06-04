<?php

namespace app\Motorcycles\Controllers;

use app\Motorcycles\Models\MotorcyclesModel;
use Core\Controller;

class MotorcyclesController extends Controller
{
    /**
     * @return void
     */
    public function index(): void
    {
        $isDiscontinued = false;
        $where = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $isDiscontinued = ($_POST['is_discontinued'] || $_POST['is_discontinued'] === 'on');

            if ($isDiscontinued) {
                $where['is_discontinued'] = true;
            }
        }

        $result = (new MotorcyclesModel())->getWithType($where);

        $this->view('motorcycles/index', ['motorcycles' => $result, 'isDiscontinued' => $isDiscontinued]);
    }
}
