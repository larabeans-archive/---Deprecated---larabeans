<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\MobileLocationRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteMobileLocationTask extends Task
{

    protected $repository;

    public function __construct(MobileLocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
