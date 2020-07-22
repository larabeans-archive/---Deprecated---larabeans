<?php

/**
 * @apiGroup           Tenant
 * @apiName            findTenantById
 *
 * @api                {GET} /v1/tenants/:id Endpoint title here..
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
$router->get('tenants/{id}', [
    'as' => 'api_tenant_find_tenant_by_id',
    'uses'  => 'Controller@findTenantById',
    'middleware' => [
      'auth:api',
    ],
]);
