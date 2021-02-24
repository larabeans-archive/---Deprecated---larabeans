<?php

/**
 * @apiGroup           Location
 * @apiName            updateCountry
 *
 * @api                {PUT} /v1/countries/:id Update Country
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  id
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
$router->put('countries/{id}', [
    'as' => 'api_location_update_country',
    'uses'  => 'Controller@updateCountry',
    'middleware' => [
      'auth:api',
    ],
]);
