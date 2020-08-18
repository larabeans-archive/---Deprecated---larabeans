<?php

/**
 * @apiGroup           Store
 * @apiName            getAllStores
 *
 * @api                {GET} /v1/stores Endpoint title here..
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
$router->get('stores', [
    'as' => 'api_store_get_all_stores',
    'uses'  => 'Controller@getAllStores',
    'middleware' => [
      'auth:api',
    ],
]);
