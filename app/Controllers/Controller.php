<?php
namespace Controllers;

class Controller
{

    /**
     * Controller base
     * Carga las vistas
     */
    public function view($view_name, $data = [])
    {
        
        $route =  'app\\Views\\' . $view_name . '.php';
        if (file_exists($route)) {
            require_once $route;
        }else{
            die('404');
        }
    }
}