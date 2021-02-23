<?php

/**
 * @apiGroup           Location
 * @apiName            updateState
 *
 * @api                {PUT} /v1/states/:id Endpoint title here..
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
$router->put('states/{id}', [
    'as' => 'api_location_update_state',
    'uses'  => 'Controller@updateState',
    'middleware' => [
      'auth:api',
    ],
]);
