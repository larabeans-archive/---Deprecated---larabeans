<?php

namespace App\Containers\Zero\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllZerosAction extends Action
{
    public function run(Request $request)
    {
        $zeros = Apiato::call('Zero@GetAllZerosTask', [], ['addRequestCriteria']);

        return $zeros;
    }
}
