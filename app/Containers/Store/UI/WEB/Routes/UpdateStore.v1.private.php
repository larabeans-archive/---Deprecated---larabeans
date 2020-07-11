<?php

/** @var Route $router */
$router->patch('stores/{id}', [
    'as' => 'web_store_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
