<?php

namespace Core;

class Controller
{
    protected $config;

    /**
     * @param array $config
     * @return self
     */
    public static function init(array $config): Controller
    {
        $instance = new self();
        $instance->config = $config;

        return $instance;
    }

    /**
     * @param string $viewName
     * @param array $data
     * @return void
     */
    public function view(string $viewName, array $data = []): void
    {
        $fullModuleName = '';
        [$moduleName, $templateName] = explode('/', $viewName);

        foreach (explode('_', $moduleName) as $moduleSubName) {
            $fullModuleName .= ucfirst($moduleSubName);
        }

        extract($data);

        require_once "../app/{$fullModuleName}/Views/{$templateName}.php";
    }
}
