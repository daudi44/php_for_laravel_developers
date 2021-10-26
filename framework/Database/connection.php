<?php
namespace Framework\Database;
use PDO;
class connection
{
    private static $config;


    public static function make($config)
    {
        static::$config = $config;
        try {
            return new PDO(
                ($config['databasetype']) .
                ":host=" . ($config['host']) .
                ";dbname=" . ($config['name']),
                $config['user'],
                $config['password']);
        }catch(\Exception $exception){
            echo 'Error de connexió a la base de dades';
        }
    }
}