<?php

/**
 * @apiGroup           Location
 * @apiName            updateCity
 *
 * @api                {PUT} /v1/cities/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiUse             CitySuccessSingleResponse
 */

/** @var Route $router */
$router->put('cities/{id}', [
    'as' => 'api_location_update_city',
    'uses'  => 'Controller@updateCity',
    'middleware' => [
      'auth:api',
    ],
]);
