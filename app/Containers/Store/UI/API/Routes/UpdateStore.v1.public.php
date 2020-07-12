<?php

/**
 * @apiGroup           Store
 * @apiName            updateStore
 *
 * @api                {PATCH} /v1/stores/:id Endpoint title here..
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
$router->patch('stores/{id}', [
    'as' => 'api_store_update_store',
    'uses'  => 'Controller@updateStore',
    'middleware' => [
      'auth:api',
    ],
]);
