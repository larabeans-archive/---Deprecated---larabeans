<?php

/**
 * @apiGroup           Location
 * @apiName            getAllLocations
 *
 * @api                {GET} /v1/locations Get all Locations
 * @apiDescription     Get all locations,query parameters supporting search criteria available here
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
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
$router->get('locations', [
    'as' => 'api_location_get_all_locations',
    'uses'  => 'Controller@getAllLocations',
    'middleware' => [
      'auth:api',
    ],
]);
