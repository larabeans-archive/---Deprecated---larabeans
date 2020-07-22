<?php

/**
 * @apiGroup           Tenant
 * @apiName            createTenant
 *
 * @api                {POST} /v1/tenants Endpoint title here..
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
$router->post('tenants', [
    'as' => 'api_tenant_create_tenant',
    'uses'  => 'Controller@createTenant',
    'middleware' => [
      'auth:api',
    ],
]);
