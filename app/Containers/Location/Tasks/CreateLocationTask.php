<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\LocationRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateLocationTask extends Task
{

    protected $repository;

    public function __construct(LocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        string $locatableType = null,
        string $locatableId = null,
        string $addressLine1 = null,
        string $addressLine2 = null,
        string $city = null,
        string $stateId = null,
        string $countryId = null,
        string $postCode = null,
        string $latitude = null,
        string $longitude = null
    )
    {

        $data = [
          'locatable_type' => $locatableType,
          'locatable_id'    => $locatableId,
          'address_line_1' => $addressLine1,
          'address_line_2' => $addressLine2,
          'city'           => $city,
          'state_id'       => $stateId,
          'country_id'     => $countryId,
          'post_code'      => $postCode,
          'latitude'       => $latitude,
          'longitude'      => $longitude
        ];

        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
