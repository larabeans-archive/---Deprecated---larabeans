<?php

/**
 * @apiGroup           Zero
 * @apiName            findZeroById
 *
 * @api                {GET} /v1/zeros/:id Endpoint title here..
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
$router->get('zeros/{id}', [
    'as' => 'api_zero_find_zero_by_id',
    'uses'  => 'Controller@findZeroById',
    'middleware' => [
      'auth:api',
    ],
]);
