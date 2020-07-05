<?php

/** @var Route $router */
$router->patch('zeros/{id}', [
    'as' => 'web_zero_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
