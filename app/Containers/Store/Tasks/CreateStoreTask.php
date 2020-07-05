<?php

namespace App\Containers\Store\Tasks;

use App\Containers\Store\Data\Repositories\StoreRepository;
use App\Containers\Store\Models\Store;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateStoreTask extends Task
{

    protected $repository;

    public function __construct(StoreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        string $name
    ): Store
    {
        try {
            return $this->repository->create([
                'name' => $name,
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
