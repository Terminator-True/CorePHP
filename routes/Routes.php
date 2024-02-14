<?php
class Routes 
{


    public function getUrl($url)
    {
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode($url,'/');
        return $url[count($url)-1];
    }

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