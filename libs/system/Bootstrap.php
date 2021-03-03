<?php
namespace libs\system;
class Bootstrap
{
    public function __construct()
    {
        if(isset($_GET["url"]))
        {
           $url = explode("/",$_GET["url"]);

           //echo $url[0];
           $controller_file = "src/controller/".$url[0].".php";
           if(file_exists($controller_file))
           {
               require_once  $controller_file;
               $file = $url[0]."Controller";
              $controller_object = new $file; //new $url[0]();

              if(isset($url[2]))
              {
                $method = $url[2];
                if(method_exists($controller_object, $method)){

                  $controller_object->$method();
                }else {
                    die($method."n'existe pas dans le controller".$file);
                }
              }
               
            else if(isset($url[1]))
              {
                  $method = $url[1];
                  if(method_exists($controller_object, $method)){

                    $controller_object->$method();
                  }else {
                      die($method."n'existe pas dans le controller".$file);
                  }
                 
              }

           }else{
               die($controller_file."n'existe pas");
           }
        }
        else { 
            echo "MVC";
        }
    }
}
?>