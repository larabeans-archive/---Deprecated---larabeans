<?php

namespace App\Containers\Location\UI\API\Controllers;

use App\Containers\Location\Tasks\GetCountryStatesTask;
use App\Containers\Location\UI\API\Requests\CreateCityRequest;
use App\Containers\Location\UI\API\Requests\CreateCountryRequest;
use App\Containers\Location\UI\API\Requests\CreateLocationRequest;
use App\Containers\Location\UI\API\Requests\CreateStateRequest;
use App\Containers\Location\UI\API\Requests\DeleteCityRequest;
use App\Containers\Location\UI\API\Requests\DeleteCountryRequest;
use App\Containers\Location\UI\API\Requests\DeleteLocationRequest;
use App\Containers\Location\UI\API\Requests\DeleteStateRequest;
use App\Containers\Location\UI\API\Requests\FindCountryRequest;
use App\Containers\Location\UI\API\Requests\FindStateRequest;
use App\Containers\Location\UI\API\Requests\GetAllStatesRequest;
use App\Containers\Location\UI\API\Requests\GetCountryCitiesRequest;
use App\Containers\Location\UI\API\Requests\GetStateCitiesRequest;
use App\Containers\Location\UI\API\Requests\FindCityRequest;
use App\Containers\Location\UI\API\Requests\GetCountryStatesRequest;
use App\Containers\Location\UI\API\Requests\GetAllCitiesRequest;
use App\Containers\Location\UI\API\Requests\GetAllLocationsRequest;
use App\Containers\Location\UI\API\Requests\FindLocationRequest;
use App\Containers\Location\UI\API\Requests\UpdateCityRequest;
use App\Containers\Location\UI\API\Requests\UpdateCountryRequest;
use App\Containers\Location\UI\API\Requests\UpdateLocationRequest;
use App\Containers\Location\UI\API\Requests\UpdateStateRequest;
use App\Containers\Location\UI\API\Transformers\CityTransformer;
use App\Containers\Location\UI\API\Transformers\CountryTransformer;
use App\Containers\Location\UI\API\Transformers\LocationTransformer;
use App\Containers\Location\UI\API\Transformers\StateTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Location\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param GetAllLocationsRequest $request
     * @return array
     */
    public function getAllLocations(GetAllLocationsRequest $request)
    {
      $locations = Apiato::call('Location@GetAllLocationsAction', [$request]);

      return $this->transform($locations, LocationTransformer::class);
    }

    /**
     * @param FindLocationRequest $request
     * @return array
     */
    public function findLocation(FindLocationRequest $request)
    {
        $location = Apiato::call('Location@FindLocationAction', [$request]);

        return $this->transform($location, LocationTransformer::class);
    }

    /**
     * @param CreateLocationRequest $request
     * @return  array
     */
    public function createLocation(CreateLocationRequest $request)
    {
      $location = Apiato::call('Location@CreateLocationAction', [$request]);

      return $this->transform($location, LocationTransformer::class);
    }

    /**
     * @param UpdateLocationRequest $request
     * @return array
     */
    public function updateLocation(UpdateLocationRequest $request)
    {
        $location = Apiato::call('Location@UpdateLocationAction', [$request]);

        return $this->transform($location, LocationTransformer::class);
    }

    /**
     * @param DeleteLocationRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteLocation(DeleteLocationRequest $request)
    {
        Apiato::call('Location@DeleteLocationAction', [$request]);

        return $this->noContent();
    }

    /**
     * Countries API
     *
     * @param GetAllCountriesRequest $request
     * @return array
     */
    public function getAllCountries(GetAllCountriesRequest $request)
    {
      $countries = Apiato::call('Location@GetAllCountriesAction', [$request]);

      return $this->transform($countries, CountryTransformer::class);
    }

    /**
     * Countries API -> Find country by Id or Name
     *
     * @param FindCountryRequest $request
     * @return array
     */
    public function findCountry(FindCountryRequest $request)
    {
      $country = Apiato::call('Location@FindCountryAction', [$request]);

      return $this->transform($country, CountryTransformer::class);
    }

    /**
     * Countries API
     *
     * @param CreateCountryRequest $request
     * @return  array
     */
    public function createCountry(CreateCountryRequest $request)
    {
      $country = Apiato::call('Location@CreateCountryAction', [$request]);

      return $this->transform($country, CountryTransformer::class);
    }

    /**
     * Countries API
     *
     * @param UpdateCountryRequest $request
     * @return array
     */
    public function updateCountry(UpdateCountryRequest $request)
    {
      $country = Apiato::call('Location@UpdateCountryAction', [$request]);

      return $this->transform($country, CountryTransformer::class);
    }

    /**
     * Countries API
     *
     * @param DeleteCountryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCountry(DeleteCountryRequest $request)
    {
      Apiato::call('Location@DeleteCountryAction', [$request]);

      return $this->noContent();
    }

    /**
     * States API
     *
     * @param GetAllStatesRequest $request
     * @return array
     */
    public function getAllStates(GetAllStatesRequest $request)
    {
      $states = Apiato::call('Location@GetAllStatesAction', [$request]);

      return $this->transform($states, StateTransformer::class);
    }

    /**
     * States API -> Find state by Id or Name
     *
     * @param FindStateRequest $request
     * @return array
     */
    public function findState(FindStateRequest $request)
    {
      $state = Apiato::call('Location@FindStateAction', [$request]);

      return $this->transform($state, StateTransformer::class);
    }

    /**
     * States API
     *
     * @param CreateStateRequest $request
     * @return  array
     */
    public function createState(CreateStateRequest $request)
    {
      $state = Apiato::call('Location@CreateStateAction', [$request]);

      return $this->transform($state, StateTransformer::class);
    }

    /**
     * States API
     *
     * @param UpdateStateRequest $request
     * @return array
     */
    public function updateState(UpdateStateRequest $request)
    {
      $state = Apiato::call('Location@UpdateStateAction', [$request]);

      return $this->transform($state, StateTransformer::class);
    }

    /**
     * States API
     *
     * @param DeleteStateRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteState(DeleteStateRequest $request)
    {
      Apiato::call('Location@DeleteStateAction', [$request]);

      return $this->noContent();
    }

    /**
     * Cities API > Get All Cities
     *
     * @param GetAllCitiesRequest $request
     * @return  array
     */
    public function getAllCities(GetAllCitiesRequest $request)
    {
      $cities = Apiato::call('Location@GetAllCitiesAction', [$request]);

      return $this->transform($cities, CityTransformer::class);
    }

    /**
     * Cities API > Find city by Id or Name
     *
     * @param FindCityRequest $request
     * @return array
     */
    public function findCity(FindCityRequest $request)
    {
      $city = Apiato::call('Location@FindCityAction', [$request]);

      return $this->transform($city, CityTransformer::class);
    }

    /**
     * Cities API > Create city
     *
     * @param CreateCityRequest $request
     * @return  array
     */
    public function createCity(CreateCityRequest $request)
    {
      $city = Apiato::call('Location@CreateCityAction', [$request]);

      return $this->transform($city, CityTransformer::class);
    }

    /**
     * Cities API > Update city
     *
     * @param UpdateCityRequest $request
     * @return  array
     */
    public function updateCity(UpdateCityRequest $request)
    {
      $city = Apiato::call('Location@UpdateCityAction', [$request]);

      return $this->transform($city, CityTransformer::class);
    }

    /**
     * Cities API > Delete city
     *
     * @param DeleteCityRequest $request
     * @return  array
     */
    public function deleteCity(DeleteCityRequest $request)
    {
      $city = Apiato::call('Location@DeleteCityAction', [$request]);

      return $this->transform($city, CityTransformer::class);
    }

}
