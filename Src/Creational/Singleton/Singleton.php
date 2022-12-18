<?php

namespace DesignPatterns\Src\Creational\Singleton;

use Exception;

class Singleton
{
    private static ?Singleton $instance = null;

    public static function getInstance(): Singleton
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     *This is not allowed in the singleton design pattern
     */
    private function __construct()
    {
    }

    /**
     *This is not allowed in the singleton design pattern
     */
    private function __clone()
    {
    }

    /**
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize a singleton.");
    }
}
