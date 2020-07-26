<?php

/**
 * @apiGroup           Tenant
 * @apiName            activateTenant
 *
 * @api                {PATCH} /v1/tenant/:id/activate Endpoint title here..
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
$router->patch('tenant/{id}/activate', [
    'as' => 'api_tenant_activate_tenant',
    'uses'  => 'Controller@activateTenant',
    'middleware' => [
      'auth:api',
    ],
]);
