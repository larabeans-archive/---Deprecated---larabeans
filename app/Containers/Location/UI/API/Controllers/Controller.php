<?php

namespace App\Containers\Location\UI\API\Controllers;

use App\Containers\Location\Tasks\FindStatesByCountryIdTask;
use App\Containers\Location\UI\API\Requests\CreateLocationRequest;
use App\Containers\Location\UI\API\Requests\DeleteLocationRequest;
use App\Containers\Location\UI\API\Requests\FindCitiesByStateIdRequest;
use App\Containers\Location\UI\API\Requests\GetAllLocationsRequest;
use App\Containers\Location\UI\API\Requests\FindLocationByIdRequest;
use App\Containers\Location\UI\API\Requests\UpdateLocationRequest;
use App\Containers\Location\UI\API\Transformers\CityTransformer;
use App\Containers\Location\UI\API\Transformers\CountryTransformer;
use App\Containers\Location\UI\API\Transformers\LocationTransformer;
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
     * @param CreateLocationRequest $request
     * @return  array
     */
    public function createAdmin(CreateLocationRequest $request)
    {
      $location = Apiato::call('Location@CreateLocationAction', [$request]);

      return $this->transform($location, LocationTransformer::class);
    }

    /**
     * @param FindLocationByIdRequest $request
     * @return array
     */
    public function findLocationById(FindLocationByIdRequest $request)
    {
        $location = Apiato::call('Location@FindLocationByIdAction', [$request]);

        return $this->transform($location, LocationTransformer::class);
    }

    /**
     * @param FindLocationByCriteriaRequest $request
     * @return array
     */
    public function findLocationByCriteria(FindLocationByCriteriaRequest $request)
    {
      $location = Apiato::call('Location@FindLocationByIdAction', [$request]);

      return $this->transform($location, LocationTransformer::class);
    }

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
     * @param GetAllCountriesRequest $request
     * @return array
     */
    public function getAllCountries(GetAllCountriesRequest $request)
    {
      $countries = Apiato::call('Location@GetAllCountriesAction', [$request]);

      return $this->transform($countries, CountryTransformer::class);
    }

    /**
     * @param FindStatesByCountryIdTask $request
     * @return array
     */
    public function findStatesByCountryId(FindStatesByCountryIdTask $request)
    {
      $location = Apiato::call('Location@FindStatesByCountryIdAction', [$request]);

      return $this->transform($location, LocationTransformer::class);
    }

    /**
     * @param FindCitiesByStateIdRequest $request
     * @return array
     */
    public function findCitiesByStateId(FindCitiesByStateIdRequest $request)
    {
      $cities = Apiato::call('Location@FindCitiesByStateIdAction', [$request]);

      return $this->transform($cities, CityTransformer::class);
    }
}
