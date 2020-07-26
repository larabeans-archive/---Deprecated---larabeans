<?php

/**
 * @apiGroup           Tenant
 * @apiName            deactivateTenant
 *
 * @api                {PATCH} /v1/tenant/:id/deactivate Endpoint title here..
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
$router->patch('tenant/{id}/deactivate', [
    'as' => 'api_tenant_deactivate_tenant',
    'uses'  => 'Controller@deactivateTenant',
    'middleware' => [
      'auth:api',
    ],
]);
