<?php

/**
 * @apiGroup           Location
 * @apiName            findCountry
 *
 * @api                {GET} /v1/countries/:id Endpoint title here..
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
$router->get('countries/{id}', [
    'as' => 'api_location_find_country',
    'uses'  => 'Controller@findCountry',
    'middleware' => [
      'auth:api',
    ],
]);
