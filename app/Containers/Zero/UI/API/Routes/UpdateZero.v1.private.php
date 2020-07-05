<?php

/**
 * @apiGroup           Zero
 * @apiName            updateZero
 *
 * @api                {PATCH} /v1/zeros/:id Endpoint title here..
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
$router->patch('zeros/{id}', [
    'as' => 'api_zero_update_zero',
    'uses'  => 'Controller@updateZero',
    'middleware' => [
      'auth:api',
    ],
]);
