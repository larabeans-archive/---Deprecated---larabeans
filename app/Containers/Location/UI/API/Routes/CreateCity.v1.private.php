<?php

/**
 * @apiGroup           Location
 * @apiName            createCity
 *
 * @api                {POST} /v1/cities Create New City
 * @apiDescription     Adds city to existing state and country
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticate User
 *
 * @apiParam           {String}  country_id
 * @apiParam           {String}  state_id
 * @apiParam           {String}  name
 * @apiParam           {String}  latitude
 * @apiParam           {String}  longitude
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
