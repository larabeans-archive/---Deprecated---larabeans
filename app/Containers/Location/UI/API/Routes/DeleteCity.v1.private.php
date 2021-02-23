<?php

/**
 * @apiGroup           Location
 * @apiName            deleteCity
 *
 * @api                {DELETE} /v1/cities/:id Endpoint title here..
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
$router->delete('cities/{id}', [
    'as' => 'api_location_delete_city',
    'uses'  => 'Controller@deleteCity',
    'middleware' => [
      'auth:api',
    ],
]);
