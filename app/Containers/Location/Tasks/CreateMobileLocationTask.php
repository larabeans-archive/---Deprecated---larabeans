<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\MobileLocationRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateMobileLocationTask extends Task
{

    protected $repository;

    public function __construct(MobileLocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
