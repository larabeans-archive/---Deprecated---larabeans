<?php

/**
 * @apiGroup           Location
 * @apiName            findCity
 *
 * @api                {GET} /v1/cities/:id Find City
 * @apiDescription     Find City BY Id
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id City Id
 *
 * @apiUse             CitySuccessSingleResponse
 */

/** @var Route $router */
$router->get('cities/{id}', [
    'as' => 'api_location_find_city',
    'uses'  => 'Controller@findCity',
    'middleware' => [
      'auth:api',
    ],
]);
