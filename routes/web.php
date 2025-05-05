<?php

$router->get('/', 'App\Controllers\HomeController@index');
$router->get('/blog', 'App\Controllers\BlogController@index');
