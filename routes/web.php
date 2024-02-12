<?php
namespace routes;

require_once APPROOT . '\\app\\Controllers\\HomeController.php';


use HomeController;
use routes\Routes;

switch ($_GET['ruta']) {
    default:
        Routes::get($_GET['ruta'],HomeController::class,'index',null);
        break;
}