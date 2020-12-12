<?php

/**
 * @apiGroup           Location
 * @apiName            findLocationByCriteria
 *
 * @api                {GET} /v1/locations/criteria Endpoint title here..
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
$router->get('locations/criteria', [
    'as' => 'api_location_find_location_by_criteria',
    'uses'  => 'Controller@findLocationByCriteria',
    'middleware' => [
      'auth:api',
    ],
]);
