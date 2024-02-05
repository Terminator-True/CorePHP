<?php
namespace app\config;

class Configuration
{
    private $config_file;
    private $file_path;
    public function __construct()
    {
        $this->file_path = '..\\config.json';

        if (file_exists($this->file_path)) {
            $this->config_file = fopen($this->file_path,'r');
        }

    }

    public function get_constants()
    {
        if ($this->config_file == null) {
            return false;
        }
        return json_decode(fread($this->config_file,filesize($this->file_path)));
    }

}