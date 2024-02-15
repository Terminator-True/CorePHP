<?php
class Routes 
{


    public function getUrl($url)
    {
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/',$url);
        return $url[count($url)-1];
    }

    //TODO Idear una manera de recibir los parametros tanto por get
    //como por POST
    public function get($route, $controller, $method,$parameters)
    {
        if ($parameters == null) {
            return $controller->$method();
        }

        return $controller->$method($parameters);
    }

    public function post($route, $controller, $method,$parameters)
    {
        if ($parameters == null) {
            return $controller->$method();
        }

        return $controller->$method($parameters);
    }
    
}