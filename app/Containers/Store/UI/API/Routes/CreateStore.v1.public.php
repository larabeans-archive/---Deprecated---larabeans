<?php

/**
 * @apiGroup           Store
 * @apiName            createStore
 *
 * @api                {POST} /v1/stores Endpoint title here..
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
$router->post('stores', [
    'as' => 'api_store_create_store',
    'uses'  => 'Controller@createStore',
    'middleware' => [
      'auth:api',
    ],
]);
