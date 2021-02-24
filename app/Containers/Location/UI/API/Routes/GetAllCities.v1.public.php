<?php

/**
 * @apiGroup           Location
 * @apiName            getAllCities
 *
 * @api                {GET} /v1/cities Get All Cities
 * @apiDescription     Get all cities,query parameters supporting search criteria available here
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  filter include columns e.g. id;name
 * @apiParam           {String}  search search columns e.g. name:search-users
 * @apiParam           {String}  orderBy name of column e.g. id
 * @apiParam           {String}  sortedBy asc or desc
 * @apiParam           {Integer}  page page number
 * @apiParam           {String}  include country,state,city
 * @apiParam           {Integer}  limit records per page
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

/** @var Route $router */
$router->get('cities', [
    'as' => 'api_location_get_all_cities',
    'uses'  => 'Controller@getAllCities',
    'middleware' => [
      'auth:api',
    ],
]);
