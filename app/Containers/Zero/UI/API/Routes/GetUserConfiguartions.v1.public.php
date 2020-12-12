<?php

/**
 * @apiGroup           Zero
 * @apiName            getUserConfigurations
 *
 * @api                {GET} /v1/zeros/user Endpoint title here..
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
$router->get('zeros/user', [
    'as' => 'api_zero_get_user_configurations',
    'uses'  => 'Controller@getUserConfigurations',
    'middleware' => [
      'auth:api',
    ],
]);
