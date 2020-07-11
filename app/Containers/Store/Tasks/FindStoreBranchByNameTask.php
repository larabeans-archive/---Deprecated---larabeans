<?php

namespace App\Containers\Store\Tasks;

use App\Containers\Store\Data\Repositories\StoreBranchRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindStoreBranchByNameTask extends Task
{

    protected $repository;

    public function __construct(StoreBranchRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($name)
    {
        try {
            return $this->repository->findByField('name', $name)->first();
        } catch (Exception $e) {
            throw new NotFoundException();
        }
    }
}
