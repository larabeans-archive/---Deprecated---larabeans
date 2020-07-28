<?php

/**
 * @apiGroup           Tenant
 * @apiName            deactivateTenant
 *
 * @api                {PATCH} /v1/tenant/:id/deactivate Deactivate Tenant
 * @apiDescription     Super admin can deactivate tenant for any possible reason.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User With Permissions
 *
 * @apiParam           {String}  id
 * @apiParam           {boolean}  status
 *
 * @apiUse             TenantSuccessSingleResponse
 */

/** @var Route $router */
$router->patch('tenant/{id}/deactivate', [
    'as' => 'api_tenant_deactivate_tenant',
    'uses'  => 'Controller@deactivateTenant',
    'middleware' => [
      'auth:api',
    ],
]);
