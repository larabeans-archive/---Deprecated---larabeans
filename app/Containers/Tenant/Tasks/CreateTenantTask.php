<?php

namespace App\Containers\Tenant\Tasks;

use App\Containers\Tenant\Data\Repositories\TenantRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
Use App\Containers\Tenant\Models\Tenant;
use Illuminate\Support\Str;
use Exception;


class CreateTenantTask extends Task
{

    protected $repository;

    public function __construct(TenantRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
      string $id = null,
      string $name,
      bool $isActive = null
    ): Tenant
    {
        $data = [
          'slug' => Str::slug($name),
          'name' => $name,
          'is_active' => $isActive ? true : false
        ];

        if (!is_null($id)) {
          $data['id'] = $id;
        }

        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
