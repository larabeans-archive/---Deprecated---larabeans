<?php

namespace App\Containers\Zero\UI\API\Controllers;

use App\Containers\Zero\UI\API\Requests\CreateZeroRequest;
use App\Containers\Zero\UI\API\Requests\DeleteZeroRequest;
use App\Containers\Zero\UI\API\Requests\GetAllZerosRequest;
use App\Containers\Zero\UI\API\Requests\FindZeroByIdRequest;
use App\Containers\Zero\UI\API\Requests\UpdateZeroRequest;
use App\Containers\Zero\UI\API\Transformers\ZeroTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Zero\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param FindZeroByIdRequest $request
     * @return array
     */
    public function findZeroById(FindZeroByIdRequest $request)
    {
        $zero = Apiato::call('Zero@FindZeroByIdAction', [$request]);

        return $this->transform($zero, ZeroTransformer::class);
    }

    /**
     * @param GetAllZerosRequest $request
     * @return array
     */
    public function getAllZeros(GetAllZerosRequest $request)
    {
        $zeros = Apiato::call('Zero@GetAllZerosAction', [$request]);

        return $this->transform($zeros, ZeroTransformer::class);
    }
}
