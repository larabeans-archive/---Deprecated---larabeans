<?php

/**
 * @apiGroup           Location
 * @apiName            findCity
 *
 * @api                {GET} /v1/cities/:id Endpoint title here..
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
$router->get('cities/{id}', [
    'as' => 'api_location_find_city',
    'uses'  => 'Controller@findCity',
    'middleware' => [
      'auth:api',
    ],
]);
