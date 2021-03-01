<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\CityRepository;
use App\Ship\Parents\Tasks\Task;
use phpDocumentor\Reflection\Types\String_;

class CreateCityTask extends Task
{
    protected $repository;

    public function __construct(CityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        int $countryId,
        int $stateId,
        string $name,
        string $latitude,
        string $longitude
    )
    {
        try {
            return $this->repository->create([
                "country_id" =>    $countryId,
                "state_id"   =>    $stateId,
                "name"       =>    $name,
                "latitude"   =>    $latitude,
                "longitude"  =>    $longitude
            ]);
        }
        catch (Exception $exception) {
          throw new CreateResourceFailedException();
        }
    }
}
