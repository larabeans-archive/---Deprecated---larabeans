<?php

/**
 * @apiGroup           Location
 * @apiName            getAllStates
 *
 * @api                {GET} /v1/states Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

/** @var Route $router */
$router->get('states', [
    'as' => 'api_location_get_all_states',
    'uses'  => 'Controller@getAllStates',
    'middleware' => [
      'auth:api',
    ],
]);
