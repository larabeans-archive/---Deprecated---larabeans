<?php

/**
 * @apiGroup           Location
 * @apiName            updateLocation
 *
 * @api                {PATCH} /v1/locations/:id Update a location
 * @apiDescription     Update location by id
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  address_line_1
 * @apiParam           {String}  address_line_2
 * @apiParam           {String}  country_id
 * @apiParam           {String}  state_id
 * @apiParam           {String}  city_id
 * @apiParam           {String}  post_code
 * @apiParam           {String}  latitude
 * @apiParam           {String}  longitude
 *
 * @apiUse             LocationSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('locations/{id}', [
    'as' => 'api_location_update_location',
    'uses'  => 'Controller@updateLocation',
    'middleware' => [
      'auth:api',
    ],
]);
