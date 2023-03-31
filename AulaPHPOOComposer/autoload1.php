<?php
    //require 'matematica.php';

    spl_autoload_register(function($class){
        if (file_exists($class.'.php')) {
            echo $class;
            require $class.'.php';
        }else{
            echo $class.'.php';
        }
    });
?>