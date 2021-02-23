<?php

/**
 * @apiGroup           Location
 * @apiName            updateCountry
 *
 * @api                {PUT} /v1/countries/:id Endpoint title here..
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
$router->put('countries/{id}', [
    'as' => 'api_location_update_country',
    'uses'  => 'Controller@updateCountry',
    'middleware' => [
      'auth:api',
    ],
]);
