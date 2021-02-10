<?php

/**
 * @apiGroup           Location
 * @apiName            getStateCities
 *
 * @api                {GET} /v1/states/:id/cities Endpoint title here..
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
$router->get('states/{id}/cities', [
    'as' => 'api_get_state_cities',
    'uses'  => 'Controller@getStateCities',
    'middleware' => [
      'auth:api',
    ],
]);
