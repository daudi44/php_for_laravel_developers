<?php

use Framework\App;

$tasks = App::get('database')->selectAll('tasks');

$greeting = 'Daniel Audí Bielsa';

require '../resources/views/index.blade.php';