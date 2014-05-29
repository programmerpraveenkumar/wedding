<?php
if(!defined('DEBUG')){
    define('DEBUG',true);
}
  class loader{
        public static function library($class){
            $file='lib/'.$class.'.php';
            if(file_exists($file)){
                require $file;
            }
        }
        public static function driver($class){                
            $file=str_replace('\\', '/', $class).'.php';
            if(file_exists($file)){
                require $file;
            }
            else{
            if (DEBUG)
                echo $file.' is not found!!';                
            }                
        }
}

spl_autoload_register(array("loader","library"));
spl_autoload_register(array("loader","driver"));
new path();
new Bootstrap();
?>