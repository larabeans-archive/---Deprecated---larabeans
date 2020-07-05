<?php

/** @var Route $router */
$router->get('zeros/create', [
    'as' => 'web_zero_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);
