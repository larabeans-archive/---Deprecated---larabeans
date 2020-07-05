<?php

/**
 * @apiGroup           Zero
 * @apiName            getAllZeros
 *
 * @api                {GET} /v1/zeros Endpoint title here..
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
$router->get('zeros', [
    'as' => 'api_zero_get_all_zeros',
    'uses'  => 'Controller@getAllZeros',
    'middleware' => [
      'auth:api',
    ],
]);
