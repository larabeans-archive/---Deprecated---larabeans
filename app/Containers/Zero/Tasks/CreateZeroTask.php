<?php

namespace App\Containers\Zero\Tasks;

use App\Containers\Zero\Data\Repositories\ZeroRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateZeroTask extends Task
{

    protected $repository;

    public function __construct(ZeroRepository $repository)
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
