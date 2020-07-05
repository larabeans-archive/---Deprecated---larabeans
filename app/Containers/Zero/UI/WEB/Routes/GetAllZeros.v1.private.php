<?php

/** @var Route $router */
$router->get('zeros', [
    'as' => 'web_zero_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
