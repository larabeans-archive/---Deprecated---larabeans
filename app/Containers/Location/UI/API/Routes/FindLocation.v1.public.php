<?php

/**
 * @apiGroup           Location
 * @apiName            findLocation
 *
 * @api                {GET} /v1/locations/:id Find Location
 * @apiDescription     Find location by id
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id Location ID
 *
 * @apiUse             LocationSuccessSingleResponse
 */

/** @var Route $router */
$router->get('locations/{id}', [
    'as' => 'api_location_find_location',
    'uses'  => 'Controller@findLocation',
    'middleware' => [
      'auth:api',
    ],
]);
