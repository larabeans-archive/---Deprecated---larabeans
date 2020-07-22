<?php

/**
 * @apiGroup           Tenant
 * @apiName            deleteTenant
 *
 * @api                {DELETE} /v1/tenants/:id Endpoint title here..
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
$router->delete('tenants/{id}', [
    'as' => 'api_tenant_delete_tenant',
    'uses'  => 'Controller@deleteTenant',
    'middleware' => [
      'auth:api',
    ],
]);
