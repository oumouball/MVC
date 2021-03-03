<?php

use Doctrine\Common\Proxy\Autoloader as ProxyAutoloader;

class autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, "autoload"));
        //===> sql_autoload
        //sql_autolaod_register(array(__CLASS__,"autoload"));
    }
    static function autoload($class)
    { 
       // echo str_replace("\\", "/", $class);
        if(file_exists("src/model/".$class.".php"))
        {
            require_once "src/model/".$class.".php"; 
        }
        else if(file_exists("src/controller/".$class.".php"))
        {
            require_once "src/controller/".$class.".php"; 
        }
        // on definit namespace
        else if(file_exists(str_replace("\\", "/", $class.".php")))
               
       {
           require_once str_replace("\\", "/", $class.".php");
       }
       else{
           die("merci d'utiliser le mot cle USE suivi de".$class);
       }
    }
}
Autoloader::register();
//=======> erreur Autoload
//Autoload::register();

?>