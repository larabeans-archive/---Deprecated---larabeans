<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\MobileLocationRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllMobileLocationsTask extends Task
{

    protected $repository;

    public function __construct(MobileLocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
