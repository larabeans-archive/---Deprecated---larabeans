<?php

/**
 * @apiGroup           Store
 * @apiName            deleteStore
 *
 * @api                {DELETE} /v1/stores/:id Endpoint title here..
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
$router->delete('stores/{id}', [
    'as' => 'api_store_delete_store',
    'uses'  => 'Controller@deleteStore',
    'middleware' => [
      'auth:api',
    ],
]);
