<?php
namespace routes;
class Routes 
{

    public static function get($route, $controller, $function,$parameters)
    {
        if ($parameters == null) {
            return $controller->$function();
        }

        $controller->$function($parameters);
    }

    public static function post($route, $controller, $function,$parameters)
    {
        if ($parameters == null) {
            return $controller->$function();
        }

        $controller->$function($parameters);
    }
    
}