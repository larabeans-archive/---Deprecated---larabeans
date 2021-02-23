<?php

/**
 * @apiGroup           Location
 * @apiName            deleteCountry
 *
 * @api                {DELETE} /v1/countries/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiUse             CountrySuccessSingleResponse
 */

/** @var Route $router */
$router->delete('countries/{id}', [
    'as' => 'api_location_delete_country',
    'uses'  => 'Controller@deleteCountry',
    'middleware' => [
      'auth:api',
    ],
]);
