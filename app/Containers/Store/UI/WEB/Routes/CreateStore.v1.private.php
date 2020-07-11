<?php

/** @var Route $router */
$router->get('stores/create', [
    'as' => 'web_store_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
