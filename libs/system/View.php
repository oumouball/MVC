<?php
namespace libs\system;
class View
{
    public function __construct()
    {
        
    }
    public function load()
    {
        $num = func_num_args(); //permet de compter le nbre d'argument
        $args = func_get_args(); // permet de recuperer les argument qui snt passés en argument

        switch ($num) {
            case 1:
               $file = "src/view/".$args[0].".php";
             
               if(file_exists($file))
               
               {
                   
                   require_once $file;
               }
               else{
                   die($file." n'existe pas comme vue");
               }

                break;
        
                case 2:
                   load("index", $data);
                   $file = "src/view/".$args[0].".php";
               if(file_exists($file))
              
               {

                   $date = $args[1];
                   require_once $file;
               }

               else{
                   die($file." n'existe pas comme vue");
               }
                    break;
  
        }
    }
}
?>