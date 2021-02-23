<?php

/**
 * @apiGroup           Location
 * @apiName            getAllCities
 *
 * @api                {GET} /v1/cities Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

/** @var Route $router */
$router->get('cities', [
    'as' => 'api_location_get_all_cities',
    'uses'  => 'Controller@getAllCities',
    'middleware' => [
      'auth:api',
    ],
]);
