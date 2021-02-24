<?php

/**
 * @apiGroup           Location
 * @apiName            deleteState
 *
 * @api                {DELETE} /v1/states/:id Delete State
 * @apiDescription     Deletes existing state record
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id State Id
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
