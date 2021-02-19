<?php

/**
 * @apiGroup           Location
 * @apiName            createCity
 *
 * @api                {POST} /v1/cities Create New City
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticate Admin User
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiUse             CitySuccessSingleResponse
 */

/** @var Route $router */
$router->post('cities', [
    'as' => 'api_location_create_city',
    'uses'  => 'Controller@createCity',
    'middleware' => [
      'auth:api',
    ],
]);
