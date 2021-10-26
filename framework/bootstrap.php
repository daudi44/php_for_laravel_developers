<?php
use Framework\App;
use Framework\Database\connection;
use Framework\Database\database;

//Laravel Service providers
App::bind('config', require 'config.php');

App::bind('database', new database(
    Connection::make(App::get('config')['database'])
    )
);