<?php

namespace App\Containers\Location\Tasks;

use Illuminate\Support\Str;
use App\Containers\Location\Data\Repositories\CityRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCityTask extends Task
{

    protected $repository;

    public function __construct(CityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($cityNameOrId)
    {
        try {
            $query = is_numeric($cityNameOrId) ? ['id' => $cityNameOrId] : (Str::isUuid($cityNameOrId) ? ['id' => $cityNameOrId] : ['name' => $cityNameOrId]);

            return $this->repository->findWhere($query)->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
