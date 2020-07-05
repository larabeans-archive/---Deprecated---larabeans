<?php

/** @var Route $router */
$router->get('zeros/{id}', [
    'as' => 'web_zero_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
