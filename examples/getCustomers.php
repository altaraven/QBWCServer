<?php
$loader = require __DIR__.'/../vendor/autoload.php';

$obj = new \QBWCServer\applications\GetCustomersApp([
    'login' => 'Admin',
    'password' => '1',
    'iterator' => [
        'maxReturned' => 1,
    ]
]);

\QBWCServer\launcher\SoapLauncher::start($obj);

//echo "<pre>";
//var_dump($obj);
//echo "</pre>";