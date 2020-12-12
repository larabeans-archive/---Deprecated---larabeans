<?php

/**
 * @apiGroup           Location
 * @apiName            updateLocation
 *
 * @api                {PATCH} /v1/locations/:id Endpoint title here..
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
$router->patch('locations/{id}', [
    'as' => 'api_location_update_location',
    'uses'  => 'Controller@updateLocation',
    'middleware' => [
      'auth:api',
    ],
]);
