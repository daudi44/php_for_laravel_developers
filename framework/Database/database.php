<?php
namespace Framework\Database;
use App\Models\Task;
use PDO;

class database
{
    private static $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $statement = $this->pdo->prepare("SELECT * FROM $table;");
        $statement->execute();
        return  $statement->fetchAll(PDO::FETCH_CLASS, Task::class);
    }

}