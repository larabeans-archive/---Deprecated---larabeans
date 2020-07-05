<?php

/** @var Route $router */
$router->get('zeros/{id}/edit', [
    'as' => 'web_zero_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
