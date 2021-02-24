<?php

/**
 * @apiGroup           Location
 * @apiName            updateCity
 *
 * @api                {PUT} /v1/cities/:id Update City
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id
 * @apiParam           {String}  country_id
 * @apiParam           {String}  state_id
 * @apiParam           {String}  name
 * @apiParam           {String}  latitude
 * @apiParam           {String}  longitude
 *
 * @apiUse             CitySuccessSingleResponse
 */

/** @var Route $router */
$router->put('cities/{id}', [
    'as' => 'api_location_update_city',
    'uses'  => 'Controller@updateCity',
    'middleware' => [
      'auth:api',
    ],
]);
