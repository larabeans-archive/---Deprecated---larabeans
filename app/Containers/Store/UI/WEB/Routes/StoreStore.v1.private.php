<?php

/** @var Route $router */
$router->post('stores/store', [
    'as' => 'web_store_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
