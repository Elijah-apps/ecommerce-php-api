<?php

use Leaf\Db;

Db::connect([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'ecommerce',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
