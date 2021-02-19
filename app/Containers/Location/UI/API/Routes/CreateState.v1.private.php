<?php

/**
 * @apiGroup           Location
 * @apiName            createState
 *
 * @api                {POST} /v1/states Endpoint title here..
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
$router->post('states', [
    'as' => 'api_location_create_state',
    'uses'  => 'Controller@createState',
    'middleware' => [
      'auth:api',
    ],
]);
