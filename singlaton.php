<?php
class Singleton
{
    private static $instance;

    private function __getInstance() {}

    public static function getInstance()
    {
        if (!self::$instance)
        {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

var_dump($instance1 === $instance2);