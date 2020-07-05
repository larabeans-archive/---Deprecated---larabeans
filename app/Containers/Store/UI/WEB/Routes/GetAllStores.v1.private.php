<?php

/** @var Route $router */
$router->get('stores', [
    'as' => 'web_store_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
