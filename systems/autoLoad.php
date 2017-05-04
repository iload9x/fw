<?php

class MyAutoloader
{
    public static function load($className) 
    {
        $directorys = array(
            SYSTEM_PATH,
            APP_PATH . 'models/',
            APP_PATH . 'libraries/'
        );
        
        foreach($directorys as $directory)
        {
            if(file_exists($directory.$className.'.php'))
            {
                include($directory.$className.'.php');
                return true;
            }
                
        }
        return false;
    }
}

spl_autoload_register(__NAMESPACE__ . "\\MyAutoloader::load");
