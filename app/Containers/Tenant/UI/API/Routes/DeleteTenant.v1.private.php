<?php

/**
 * @apiGroup           Tenant
 * @apiName            deleteTenant
 *
 * @api                {DELETE} /v1/tenants/:id Delete Tenant
 * @apiDescription     Api end point to delete tenant.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User With Permissions
 *
 *
 * @apiParam           {String}  id
 *
 * @apiUse             TenantSuccessSingleResponse
 */

/** @var Route $router */
$router->delete('tenants/{id}', [
    'as' => 'api_tenant_delete_tenant',
    'uses'  => 'Controller@deleteTenant',
    'middleware' => [
      'auth:api',
    ],
]);
