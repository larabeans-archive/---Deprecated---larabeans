<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\StateRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllStatesTask extends Task
{

    protected $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
