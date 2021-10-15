<?php

require 'app/helpers.php';
require 'app/Task.php';

//Exemple de creació de tasques
//$task = new Task(1,'Buy bread','A la panaderia',0);
//var_dump($task);

//PDO
$user = 'debian-sys-maint';
$pass = 'V78vxxs2OflGCP39';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
}catch(\Exception $exception){
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
//var_dump($tasks);


//Crido la funció greet
$greeting = greet();