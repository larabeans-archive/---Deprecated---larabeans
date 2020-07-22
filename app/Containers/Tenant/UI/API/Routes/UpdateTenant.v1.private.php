<?php

/**
 * @apiGroup           Tenant
 * @apiName            updateTenant
 *
 * @api                {PATCH} /v1/tenants/:id Endpoint title here..
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
$router->patch('tenants/{id}', [
    'as' => 'api_tenant_update_tenant',
    'uses'  => 'Controller@updateTenant',
    'middleware' => [
      'auth:api',
    ],
]);
