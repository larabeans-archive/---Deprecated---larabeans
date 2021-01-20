<?php

/**
 * @apiGroup           Location
 * @apiName            findStatesByCountryId
 *
 * @api                {GET} /v1/location/country/:id/states Endpoint title here..
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
$router->get('location/country/{id}/states', [
    'as' => 'api_location_find_states_by_country_id',
    'uses'  => 'Controller@findStatesByCountryId',
    'middleware' => [
      'auth:api',
    ],
]);
