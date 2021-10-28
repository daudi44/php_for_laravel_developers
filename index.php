<?php

use Framework\App;

require 'vendor/autoload.php';
require 'framework/bootstrap.php';

//dd($_SERVER['REQUEST_URI']);
App::get('router')->redirect($_SERVER['REQUEST_URI']);