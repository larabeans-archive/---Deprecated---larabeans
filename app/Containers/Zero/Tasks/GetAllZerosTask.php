<?php

namespace App\Containers\Zero\Tasks;

use App\Containers\Zero\Data\Repositories\ZeroRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllZerosTask extends Task
{

    protected $repository;

    public function __construct(ZeroRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
