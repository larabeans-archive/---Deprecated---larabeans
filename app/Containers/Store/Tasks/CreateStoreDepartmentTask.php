<?php

namespace App\Containers\Store\Tasks;

use App\Containers\Store\Data\Repositories\StoreDepartmentRepository;
use App\Containers\Store\Models\StoreDepartment;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateStoreDepartmentTask extends Task
{

    protected $repository;

    public function __construct(StoreDepartmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
        string $store_id,
        string $name
    ) : StoreDepartment
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
