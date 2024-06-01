<?php

namespace core;

class Controller
{
    protected $config;
    protected $database;

    public static function init($config, $database)
    {
        $instance = new self();
        $instance->config = $config;
        $instance->database = $database;

        return $instance;
    }

    public function view($viewName, $data = [])
    {
        extract($data);
        require_once '../app/Views/'. $viewName. '.php';
    }
}
