<?php

/**
 * @apiGroup           Location
 * @apiName            findCountry
 *
 * @api                {GET} /v1/countries/:id Find Country
 * @apiDescription     Find country by Id
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id Country Id
 *
 * @apiUse             CountrySuccessSingleResponse
 */

/** @var Route $router */
$router->get('countries/{id}', [
    'as' => 'api_location_find_country',
    'uses'  => 'Controller@findCountry',
    'middleware' => [
      'auth:api',
    ],
]);
