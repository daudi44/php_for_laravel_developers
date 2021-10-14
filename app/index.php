<?php

//Query String per agafar info dinàmica
//var_dump ($_GET['name']);

//API
function greet(){
    $name = htmlspecialchars($name = htmlspecialchars());
    $cognom = htmlspecialchars($_GET['cognom']);

    return "Hello ${name} ${cognom}!";
}
$greeting = greet();


//Una altra manera de concatenar
//$greeting = 'Hello ' . $_GET['name'] . ' ' . $_GET['cognom'] . '!';