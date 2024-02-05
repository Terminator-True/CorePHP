<?php 
namespace app\config;
require_once 'Configuration.php';
use app\config\Configuration;


class Constants
{
    public function __construct($config)
    {   
        define('APPROOT', dirname(dirname(__FILE__)));
        if ($config != false) {
            define('URLROOT', $config->URLROOT);
            define('SITENAME', $config->SITENAME);        
        }
    }
}


