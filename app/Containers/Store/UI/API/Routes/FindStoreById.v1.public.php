<?php

/**
 * @apiGroup           Store
 * @apiName            findStoreById
 *
 * @api                {GET} /v1/stores/:id Endpoint title here..
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
$router->get('stores/{id}', [
    'as' => 'api_store_find_store_by_id',
    'uses'  => 'Controller@findStoreById',
    'middleware' => [
      'auth:api',
    ],
]);
