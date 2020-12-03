<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\MobileLocationRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateMobileLocationTask extends Task
{

    protected $repository;

    public function __construct(MobileLocationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
