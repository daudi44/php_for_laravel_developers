<?php
namespace Framework\Database;
use PDO;
class connection
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    function connectDB(){ //Dependency Injection
        try {
            return new PDO(
                ($this->config['database']['databasetype']) .
                ":host=" . ($this->config['database']['host']) .
                ";dbname=" . ($this->config['database']['name']),
                $this->config['database']['user'],
                $this->config['database']['password']);
        }catch(\Exception $exception){
            echo 'Error de connexió a la base de dades';
        }
    }
}