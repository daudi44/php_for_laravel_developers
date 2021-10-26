<?php

use Dotenv\Dotenv;
use Framework\App;
use Framework\Database\connection;
use Framework\Database\database;


$dotenv = Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

//Laravel Service providers
App::bind('config', require 'config.php');

App::bind('database', new database(
    Connection::make(App::get('config')['database'])
    )
);