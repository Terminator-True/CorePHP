<?php
namespace routes;
require_once 'Routes.php';
use Routes;


// Controllers 
require_once '..\\app\\Controllers\\HomeController.php'; //TEST
use HomeController;

class Router extends Routes
{

    public function main($url)
    {
        $route = $this->getUrl($url);

        switch ($route)
        {
            case '':
                return $this->get($route,new HomeController,'index',null);

            case 'example':
                return $this->get($route,new HomeController,'example',['Hola','Mundo']);

            default:
                return $this->get($route,new HomeController,'notFound',null);
        }

    }

}

$init_routes = new Router;
$init_routes->main($_SERVER['REQUEST_URI']);
