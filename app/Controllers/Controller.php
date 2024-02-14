<?php

class Controller
{

    /**
     * Controller base
     * Carga las vistas
     */
    public function view($view_name, $data = [])
    {
        
        $route =  APPROOT . '\\app\\Views\\' . $view_name . '.php';
        if (file_exists($route)) {
            require_once $route;
        }else{
            die('404');
        }
    }
}