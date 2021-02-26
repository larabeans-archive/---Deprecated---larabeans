<?php

namespace App\Containers\Location\Tasks;

use App\Containers\Location\Data\Repositories\CountryRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Str;

class FindCountryTask extends Task
{

    protected $repository;

    public function __construct(CountryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($countryNameOrId)
    {
        try {
            $query = is_numeric($countryNameOrId) ? ['id' => $countryNameOrId] : (Str::isUuid($countryNameOrId) ? ['id' => $countryNameOrId] : ['name' => $countryNameOrId]);

            return $this->repository->findWhere($query)->first();
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
