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

    public function __construct()
    {
    }


    public function main()
    {
        $configuration = new Configuration();
        $config = $configuration->get_constants();
        $init = new Constants($config);
        
        if ($config != false && isset($GLOBALS['database'])) {
            $database = new Database($config->host,$config->user,$config->password,$config->database_name);
            $database_status = $database->connect();
            
            if (!$database_status['status']) {
                LogCreator::create('Error','Error on connecting database');
            }else{
                $GLOBALS['database'] = $database_status['value']; 
            }

            
        }elseif($config != true){
            LogCreator::create('Error','No config file');
            return;
        }
        
    }

}

$init = new Kernel();
$init->main();