<?php

require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';

try {
    $dbh = new PDO(
        ($config['database']['databasetype']) .
        ":host=" . ($config['database']['host']) .
        ";dbname=" . ($config['database']['name']),
        $config['database']['user'],
        $config['database']['password']);
}catch(\Exception $exception){
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

$greeting = greet();