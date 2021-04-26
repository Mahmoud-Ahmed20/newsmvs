<?php
namespace news\core;
use Dcblogdev\PdoWrapper\Database as Database;

class model 
{
    static function db()
    {
                 // make a connection to mysql here
                 $options = [
                    //required
                    'username' => USERNAME,
                    'database' => DATABASE,
                    //optional
                    'password' => PASSOWRD,
                    'type' => DATABASE_TYPE,
                    'charset' => CHARSET,
                    'host' => SERVER,
                    'port' => PORT
        ];
        
              return $db = new Database($options);
    }
}



