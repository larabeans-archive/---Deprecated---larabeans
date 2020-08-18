<?php

namespace App\Containers\Tenant\Tasks;

use App\Containers\Tenant\Data\Repositories\TenantRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindTenantByIdTask extends Task
{

    protected $repository;

    public function __construct(TenantRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
