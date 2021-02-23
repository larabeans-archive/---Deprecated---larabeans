<?php

/**
 * @apiGroup           Location
 * @apiName            deleteState
 *
 * @api                {DELETE} /v1/states/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiUse             StateSuccessSingleResponse
 */

/** @var Route $router */
$router->delete('states/{id}', [
    'as' => 'api_location_delete_state',
    'uses'  => 'Controller@deleteState',
    'middleware' => [
      'auth:api',
    ],
]);
