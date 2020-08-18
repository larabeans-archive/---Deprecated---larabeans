<?php

/**
 * @apiGroup           Tenant
 * @apiName            findTenantById
 *
 * @api                {GET} /v1/tenants/:id Find/Get Tenant
 * @apiDescription     Api endpoint to get tenant details.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User With Permissions
 *
 * @apiParam           {String}  id
 *
 * @apiUse             TenantSuccessSingleResponse
 */

/** @var Route $router */
$router->get('tenants/{id}', [
    'as' => 'api_tenant_find_tenant_by_id',
    'uses'  => 'Controller@findTenantById',
    'middleware' => [
      'auth:api',
    ],
]);
