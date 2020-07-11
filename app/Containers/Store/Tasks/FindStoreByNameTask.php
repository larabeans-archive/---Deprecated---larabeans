<?php

namespace App\Containers\Store\Tasks;

use App\Containers\Store\Data\Repositories\StoreRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindStoreByNameTask extends Task
{

    protected $repository;

    public function __construct(StoreRepository $repository)
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
