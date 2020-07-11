<?php

namespace App\Containers\Store\Tasks;

use App\Containers\Store\Data\Repositories\StoreLocationRepository;
use App\Containers\Store\Models\StoreLocation;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateStoreLocationTask extends Task
{

    protected $repository;

    public function __construct(StoreLocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        string $branch_id,
        string $address_line1,
        string $address_line2,
        string $zipcode,
        string $city,
        string $state,
        string $country,
        string $landline_no1,
        string $landline_no2
    ): StoreLocation
    {
        try {
            return $this->repository->create([
                'branch_id' => $branch_id,
                'address_line1' => $address_line1,
                'address_line2' => $address_line2,
                'zipcode' => $zipcode,
                'city' => $city,
                'state' => $state,
                'country' => $country,
                'landline_no1' => $landline_no1,
                'landline_no2' => $landline_no2
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
