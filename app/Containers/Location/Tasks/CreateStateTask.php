<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\StateRepository;
use App\Ship\Parents\Tasks\Task;

class CreateStateTask extends Task
{
    protected $repository;

    public function __construct(StateRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(
      int $countryId,
      string $name,
      string $code
    )
    {
        try {
            $this->repository->create([
                "country_id" =>    $countryId,
                "name"       =>    $name,
                "code"       =>    $code
            ]);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
