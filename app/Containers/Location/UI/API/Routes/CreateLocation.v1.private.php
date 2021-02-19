<?php

/**
 * @apiGroup           Location
 * @apiName            createLocation
 *
 * @api                {POST} /v1/locations Create Location
 * @apiDescription     Creates Location/Address for any locatable entity
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  locatable_type Type of locatable entity e.g. user
 * @apiParam           {String}  locatable_id UUID of locatable entity
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
$router->post('locations', [
    'as' => 'api_location_create_location',
    'uses'  => 'Controller@createLocation',
    'middleware' => [
      'auth:api',
    ],
]);
