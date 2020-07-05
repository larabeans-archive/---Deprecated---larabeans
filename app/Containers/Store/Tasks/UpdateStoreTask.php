<?php

namespace App\Containers\Store\Tasks;

use App\Containers\Store\Data\Repositories\StoreRepository;
use App\Containers\Store\Models\Store;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateStoreTask extends Task
{

    protected $repository;

    public function __construct(StoreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        string $id,
        string $name
    ): Store
    {
        try {
            return $this->repository->update([
                'name' => $name
            ], $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
