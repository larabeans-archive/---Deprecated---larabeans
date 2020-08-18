<?php

/**
 * @apiGroup           Tenant
 * @apiName            getAllTenants
 *
 * @api                {GET} /v1/tenants Get All Tenant
 * @apiDescription     Api endpoint to get list of all tenants.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User With Permissions
 *
 *
 * @apiUse             TenantSuccessSingleResponse
 */

/** @var Route $router */
$router->get('tenants', [
    'as' => 'api_tenant_get_all_tenants',
    'uses'  => 'Controller@getAllTenants',
    'middleware' => [
      'auth:api',
    ],
]);
