<?php

/** @var Route $router */
$router->get('stores/{id}', [
    'as' => 'web_store_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
