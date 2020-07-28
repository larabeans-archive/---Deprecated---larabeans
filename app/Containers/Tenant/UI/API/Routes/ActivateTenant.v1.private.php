<?php

/**
 * @apiGroup           Tenant
 * @apiName            activateTenant
 *
 * @api                {PATCH} /v1/tenant/:id/activate Activate Tenant
 * @apiDescription     Super admin, can activate any tenant for any possible reason.
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
$router->patch('tenant/{id}/activate', [
    'as' => 'api_tenant_activate_tenant',
    'uses'  => 'Controller@activateTenant',
    'middleware' => [
      'auth:api',
    ],
]);
