<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\CountryRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;


class FeedCountryDataTask extends Task
{
    protected $repository;

    public function __construct(CountryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run( Array $countries)
    {
        try {
            foreach ($countries as $country) {
                $this->repository->create($country);
            }
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
