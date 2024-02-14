<?php
namespace routes;
require_once 'Routes.php';
use Routes;


// Controllers 
require_once '..\\app\\Controllers\\HomeController.php';
use HomeController;

class Router extends Routes
{

    public function main($url)
    {
        $route = $this->getUrl($url);

        switch ($route)
        {
            case '/':
                return $this->get($route,new HomeController,'index',null);

            default:
                return $this->get($route,HomeController::class,'notFound',null);
        }

    }

}

