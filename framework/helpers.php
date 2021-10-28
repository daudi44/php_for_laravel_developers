<?php
//Funcions del nostre programa

//API
use App\Models\Task;

function greet(){
    $name = htmlspecialchars($_GET['name']);
    $cognom = htmlspecialchars($_GET['cognom']);

    return "Hello ${name} ${cognom}!";
}

function dd($xivato){
    var_dump($xivato);
    die();
}