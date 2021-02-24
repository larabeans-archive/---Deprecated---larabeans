<?php

/**
 * @apiGroup           Location
 * @apiName            deleteCountry
 *
 * @api                {DELETE} /v1/countries/:id Delete Country
 * @apiDescription     Deletes existing country record
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id Country Id
 *
 * @apiUse             CountrySuccessSingleResponse
 */

/** @var Route $router */
$router->delete('countries/{id}', [
    'as' => 'api_location_delete_country',
    'uses'  => 'Controller@deleteCountry',
    'middleware' => [
      'auth:api',
    ],
]);
