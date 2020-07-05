<?php

/** @var Route $router */
$router->get('stores/{id}/edit', [
    'as' => 'web_store_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
