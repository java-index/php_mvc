<?php

class Router
{
    function __construct()
    {
        $url = explode('/', $_GET['url']);
        echo $url[0];
        if ( empty($url[0]) )
        {
            require_once 'controllers/Index_Controller.php';
            $controller = new Index_Controller();
            $controller->index();
            return false;
        }
    }
}