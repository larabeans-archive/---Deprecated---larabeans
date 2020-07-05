<?php

namespace App\Containers\Zero\Tasks;

use App\Containers\Zero\Data\Repositories\ZeroRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteZeroTask extends Task
{

    protected $repository;

    public function __construct(ZeroRepository $repository)
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
