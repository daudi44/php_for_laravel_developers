<?php
namespace Framework\Database;
class database
{
    public $config;
    private $connection;

    public function __construct($config)
    {
        $this->config = $config;
        $this->connection = new connection($config);
    }

    function selectAll($table){
        return fetchAllTasks($this->connection->connectDB($this->config));
    }
}