<?php

/** @var Route $router */
$router->delete('stores/{id}', [
    'as' => 'web_store_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
