<?php

//API
function greet(){
    $name = htmlspecialchars($_GET['name']);
    $cognom = htmlspecialchars($_GET['cognom']);

    return "Hello ${name} ${cognom}!";
    //Una altra manera de concatenar
    //$greeting = 'Hello ' . $_GET['name'] . ' ' . $_GET['cognom'] . '!';
}