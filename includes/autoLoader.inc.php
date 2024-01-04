<?php
    spl_autoload_register("loadClass");
    function loadClass($className){
        $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        if(strpos($url, 'book.add.php') !== false){
            $path = '../classes/';
        }
        else if(strpos($url, 'inc.php') !== false){
            $path = '../classes/';
        }
        else{
            $path = 'classes/';
        }

        $extension = ".class.php";
        $fullPath = $path . $className . $extension;

        if(!file_exists($fullPath)){
            return false;
        }
        
        include_once($fullPath);
        // require_once($fullPath);
    }

    //fixing the autoLoader.inc.php is not finding the classes 
    /*
    <?php
    spl_autoload_register('loadClass');

    function loadClass($className){
        $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        if(strpos($url, 'includes') !== false){
            $path = '../classes/';
        }
        else{
            $path = '/classes/';
        }

        $extension = '.class.php';

        require_once $path . $className . $extension;

    }
    */