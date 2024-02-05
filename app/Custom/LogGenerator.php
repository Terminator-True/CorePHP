<?php

namespace app\Custom;

class LogCreator
{

    static public function create($type,$err)
    {
        $file_path = APPROOT.'\\log\\' . $type . '.log';
        
        $file = fopen($file_path,'a');
        if ($file) {
            $line = "| " . $err . " | " . date("Y.m.d H:i") . "\n";
    
            fwrite($file,$line);
    
            fclose($file);
        }
    }
}