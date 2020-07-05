<?php

/** @var Route $router */
$router->delete('zeros/{id}', [
    'as' => 'web_zero_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
