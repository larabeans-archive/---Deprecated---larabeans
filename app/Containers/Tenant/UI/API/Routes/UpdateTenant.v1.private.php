<?php

/**
 * @apiGroup           Tenant
 * @apiName            updateTenant
 *
 * @api                {PATCH} /v1/tenants/:id Update Tenant
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User With Permissions
 *
 * @apiParam           {String}  name
 * @apiParam           {String}  status
 *
 * @apiUse             TenantSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('tenants/{id}', [
    'as' => 'api_tenant_update_tenant',
    'uses'  => 'Controller@updateTenant',
    'middleware' => [
      'auth:api',
    ],
]);
