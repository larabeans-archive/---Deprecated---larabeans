<?php

/**
 * @apiGroup           Location
 * @apiName            createCountry
 *
 * @api                {POST} /v1/countries Endpoint title here..
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
$router->post('countries', [
    'as' => 'api_location_create_country',
    'uses'  => 'Controller@createCountry',
    'middleware' => [
      'auth:api',
    ],
]);
