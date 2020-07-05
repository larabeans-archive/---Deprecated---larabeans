<?php

namespace App\Containers\Zero\Tasks;

use App\Containers\Zero\Data\Repositories\ZeroRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateZeroTask extends Task
{

    protected $repository;

    public function __construct(ZeroRepository $repository)
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
