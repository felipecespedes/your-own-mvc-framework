<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    "driver" => "mysql",
    "host" => "localhost",
    "port" => 3306,
    "username" => "root",
    "password" => "",
    "database" => "test",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
]);

$capsule->bootEloquent();
