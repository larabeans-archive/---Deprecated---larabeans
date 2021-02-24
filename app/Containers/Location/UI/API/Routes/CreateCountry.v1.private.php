<?php

/**
 * @apiGroup           Location
 * @apiName            createCountry
 *
 * @api                {POST} /v1/countries Create Country
 * @apiDescription     Adds country record
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  name
 * @apiParam           {String}  native
 * @apiParam           {String}  alpha2
 * @apiParam           {String}  alpha3
 * @apiParam           {String}  isd
 * @apiParam           {String}  capital
 * @apiParam           {String}  currency
 * @apiParam           {String}  continent
 * @apiParam           {String}  subcontinent
 * @apiParam           {String}  emoji
 * @apiParam           {String}  emoji_unicode
 *
 * @apiUse             CountrySuccessSingleResponse
 */

/** @var Route $router */
$router->post('countries', [
    'as' => 'api_location_create_country',
    'uses'  => 'Controller@createCountry',
    'middleware' => [
      'auth:api',
    ],
]);
