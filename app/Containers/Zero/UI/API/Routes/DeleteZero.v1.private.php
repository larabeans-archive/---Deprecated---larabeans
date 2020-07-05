<?php

/**
 * @apiGroup           Zero
 * @apiName            deleteZero
 *
 * @api                {DELETE} /v1/zeros/:id Endpoint title here..
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
$router->delete('zeros/{id}', [
    'as' => 'api_zero_delete_zero',
    'uses'  => 'Controller@deleteZero',
    'middleware' => [
      'auth:api',
    ],
]);
