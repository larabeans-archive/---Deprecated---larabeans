<?php

/**
 * @apiGroup           Location
 * @apiName            deleteLocation
 *
 * @api                {DELETE} /v1/locations/:id Delete a Location
 * @apiDescription     Delete Location by Id
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id Location id
 *
 * @apiUse             LocationSuccessSingleResponse
 */

/** @var Route $router */
$router->delete('locations/{id}', [
    'as' => 'api_location_delete_location',
    'uses'  => 'Controller@deleteLocation',
    'middleware' => [
      'auth:api',
    ],
]);
