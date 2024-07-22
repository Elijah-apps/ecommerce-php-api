<?php

use Leaf\Http\Response;
use Leaf\Http\Request;

require __DIR__ . '/../config/database.php';

// Product routes
$app->get('/products', 'ProductController@index');
$app->get('/products/:id', 'ProductController@show');
$app->post('/products', 'ProductController@store');
$app->put('/products/:id', 'ProductController@update');
$app->delete('/products/:id', 'ProductController@destroy');

// User routes
$app->post('/users/register', 'UserController@register');
$app->post('/users/login', 'UserController@login');

// Order routes
$app->post('/orders', 'OrderController@store');
$app->get('/orders/:id', 'OrderController@show');
$app->get('/users/:user_id/orders', 'OrderController@userOrders');
