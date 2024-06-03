<?php

namespace Core;

class Model
{
    public const PROJECT_NAME = 'MyMotorcycles';

    /**
     * @return string
     */
    public static function getDirectory(): string
    {
        return $_SERVER['HOME'] . DIRECTORY_SEPARATOR . static::PROJECT_NAME;
    }
}
