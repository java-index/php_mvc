<?php

class View
{
    public function render( $view_name )
    {
        require_once 'views/' . $view_name . '.php';
    }
}