<?php

namespace App\Repositories;


class AbstractRepository
{
    protected static $instance = null;

    /**
     * @return null|AbstractRepository|static
     */
    public static function instance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }
}