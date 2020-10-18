<?php

/**
 * @apiGroup           Location
 * @apiName            deleteLocation
 *
 * @api                {DELETE} /v1/locations/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('locations/{id}', [
    'as' => 'api_location_delete_location',
    'uses'  => 'Controller@deleteLocation',
    'middleware' => [
      'auth:api',
    ],
]);
