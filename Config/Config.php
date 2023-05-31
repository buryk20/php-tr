<?php

namespace Config;

class Config
{
    protected static Config|null $instance = null;

    public static function get(string $name): string|null
    {
        if(is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance->getParam($name);
    }

    public function getParam(string $name): string|null
    {
        return null;
    }
}
