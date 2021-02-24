<?php

/**
 * @apiGroup           Location
 * @apiName            createState
 *
 * @api                {POST} /v1/states Create State
 * @apiDescription     Add state record to existing country
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  country_id
 * @apiParam           {String}  name
 * @apiParam           {String}  code
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
