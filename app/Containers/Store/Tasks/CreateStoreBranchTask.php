<?php

namespace App\Containers\Store\Tasks;

use App\Containers\Store\Data\Repositories\StoreBranchRepository;
use App\Containers\Store\Models\StoreBranch;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateStoreBranchTask extends Task
{

    protected $repository;

    public function __construct(StoreBranchRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        string $store_id,
        string $name
    ): StoreBranch
    {
        try {
            return $this->repository->create([
                'store_id' => $store_id,
                'name' => $name
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
