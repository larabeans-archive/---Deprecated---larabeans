<?php

/**
 * @apiGroup           Zero
 * @apiName            createZero
 *
 * @api                {POST} /v1/zeros Endpoint title here..
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
$router->post('zeros', [
    'as' => 'api_zero_create_zero',
    'uses'  => 'Controller@createZero',
    'middleware' => [
      'auth:api',
    ],
]);
