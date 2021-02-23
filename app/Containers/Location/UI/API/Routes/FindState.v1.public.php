<?php

/**
 * @apiGroup           Location
 * @apiName            findState
 *
 * @api                {GET} /v1/states/:id Endpoint title here..
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
$router->get('states/{id}', [
    'as' => 'api_location_find_state',
    'uses'  => 'Controller@findState',
    'middleware' => [
      'auth:api',
    ],
]);
