<?php

use Framework\Database\database;
require 'config.php';
require 'app/helpers.php';

//$database = new Database();
$database = new database($config);
$tasks = $database -> selectAll('tasks');
//$tasks = Database::selectAll('tasks'); //Crida estàtitca -> Sense new

$greeting = greet();