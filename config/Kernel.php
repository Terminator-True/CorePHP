<?php 
namespace app\config;

require_once 'Constants.php';
require_once 'Configuration.php';
require_once 'Database.php';
require_once '..\\app\\Custom\\LogGenerator.php';

use app\config\Constants;
use app\config\Configuration;
use app\config\Database;
use app\Custom\LogCreator;

class Kernel 
{
    private $controller = 'HomeController';
    private $method = 'index';


    public function __construct()
    {
        $configuration = new Configuration();
        $config = $configuration->get_constants();
        $init = new Constants($config);
        
        if ($config != false) {
            $database = new Database($config->host,$config->user,$config->password,$config->database_name);
            $database_status = $database->connect();
            
            if (!$database_status) {
                LogCreator::create('Error','Error on connecting database');
            }
        }else{

            LogCreator::create('Error','No config file');
        }
        
    }
}

$init = new Kernel();