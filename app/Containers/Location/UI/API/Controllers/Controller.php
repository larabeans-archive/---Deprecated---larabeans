<?php

namespace App\Containers\Location\UI\API\Controllers;

use App\Containers\Location\UI\API\Requests\CreateLocationRequest;
use App\Containers\Location\UI\API\Requests\DeleteLocationRequest;
use App\Containers\Location\UI\API\Requests\GetAllLocationsRequest;
use App\Containers\Location\UI\API\Requests\FindLocationByIdRequest;
use App\Containers\Location\UI\API\Requests\UpdateLocationRequest;
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
     * @param FindLocationByIdRequest $request
     * @return array
     */
    public function findLocationById(FindLocationByIdRequest $request)
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
}
