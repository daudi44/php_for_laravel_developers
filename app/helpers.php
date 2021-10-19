<?php
//Funcions del nostre programa

//API
function greet(){
    $name = htmlspecialchars($_GET['name']);
    $cognom = htmlspecialchars($_GET['cognom']);

    return "Hello ${name} ${cognom}!";
    //Una altra manera de concatenar
    //$greeting = 'Hello ' . $_GET['name'] . ' ' . $_GET['cognom'] . '!';
}

function dd($xivato){
    var_dump($xivato);
    die();
}

//API
function connectDB($config){ //Dependency Injection
    try {
        return new PDO(
            ($config['database']['databasetype']) .
            ":host=" . ($config['database']['host']) .
            ";dbname=" . ($config['database']['name']),
            $config['database']['user'],
            $config['database']['password']);
    }catch(\Exception $exception){
        echo 'Error de connexió a la base de dades';
    }
}