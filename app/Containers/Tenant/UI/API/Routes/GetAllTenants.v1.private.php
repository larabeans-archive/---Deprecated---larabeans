<?php

/**
 * @apiGroup           Tenant
 * @apiName            getAllTenants
 *
 * @api                {GET} /v1/tenants Endpoint title here..
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
$router->get('tenants', [
    'as' => 'api_tenant_get_all_tenants',
    'uses'  => 'Controller@getAllTenants',
    'middleware' => [
      'auth:api',
    ],
]);
