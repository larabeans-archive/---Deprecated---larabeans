<?php

/**
 * @apiGroup           Location
 * @apiName            deleteCity
 *
 * @api                {DELETE} /v1/cities/:id Delete City
 * @apiDescription     Deletes existing city record
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id City Id
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
