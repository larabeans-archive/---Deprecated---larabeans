<?php

/** @var Route $router */
$router->post('zeros/store', [
    'as' => 'web_zero_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
