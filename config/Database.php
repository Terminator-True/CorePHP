<?php

namespace app\config;

use mysqli;

class Database
{
    private $host;
    private $user;
    private $pass;
    private $name;

    private $db_handler;

	private $stmt;
	private $error;
    public function __construct($host, $user, $pass, $name)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->name = $name;

    }

    public function connect()
    {
        
        $this->db_handler = new mysqli($this->host, $this->user, $this->pass,$this->name);
        
        if ($this->db_handler->connect_error) {
            
            return [
                'status'=>false,
                'value'=>null,
            ];
        }

        return[
            'status' => true,
            'value'=>$this->db_handler
        ];
    }


}