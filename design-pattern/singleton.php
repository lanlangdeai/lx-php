<?php

final class Singleton
{
    private static $instance;

    private function __construct(){}

    private function __clone(){}

    private function __wakeup(){}

    public static function getInstance(): Singleton
    {
        if(is_null(self::$instance)){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

