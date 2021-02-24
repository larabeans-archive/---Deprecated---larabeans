<?php

/**
 * @apiGroup           Location
 * @apiName            updateState
 *
 * @api                {PUT} /v1/states/:id Update State
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id
 * @apiParam           {String}  country_id
 * @apiParam           {String}  name
 * @apiParam           {String}  code
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
