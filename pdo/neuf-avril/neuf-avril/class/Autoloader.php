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
// IL FAUT QUE LE NOM DU FICHIER SOIT LE MÊME QUE LE NOM DE LA CLASS