<?php

namespace App\Containers\Zero\Tasks;

use App\Containers\Zero\Data\Repositories\ZeroRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindZeroByIdTask extends Task
{

    protected $repository;

    public function __construct(ZeroRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
