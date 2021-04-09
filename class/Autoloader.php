<?php

class Autoloader
{
    static function autoload($class)
    {
        require "class/$class.php";
    }

    static function register()
    {
        spl_autoload_register([__CLASS__, "autoload"]);
    }
}