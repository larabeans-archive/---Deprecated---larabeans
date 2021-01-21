<?php

/**
 * @apiGroup           Location
 * @apiName            findCitiesByStateId
 *
 * @api                {GET} /v1/location/state/:id/cities Endpoint title here..
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
$router->get('location/state/{id}/cities', [
    'as' => 'api_location_find_cities_by_state_id',
    'uses'  => 'Controller@findCitiesByStateId',
    'middleware' => [
      'auth:api',
    ],
]);
