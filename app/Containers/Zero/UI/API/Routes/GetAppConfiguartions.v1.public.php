<?php

/**
 * @apiGroup           Zero
 * @apiName            getAppConfiguartions
 *
 * @api                {GET} /v1/zeros/configurations Endpoint title here..
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
$router->get('zeros/configurations', [
    'as' => 'api_zero_get_app_configuartions',
    'uses'  => 'Controller@getAppConfiguartions',
    'middleware' => [
      'auth:api',
    ],
]);
