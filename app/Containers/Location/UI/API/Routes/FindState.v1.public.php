<?php

/**
 * @apiGroup           Location
 * @apiName            findState
 *
 * @api                {GET} /v1/states/:id Find State
 * @apiDescription     Find state by Id
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id State Id
 *
 * @apiUse             StateSuccessSingleResponse
 */

/** @var Route $router */
$router->get('states/{id}', [
    'as' => 'api_location_find_state',
    'uses'  => 'Controller@findState',
    'middleware' => [
      'auth:api',
    ],
]);
