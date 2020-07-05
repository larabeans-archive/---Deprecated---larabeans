<?php

namespace App\Containers\Zero\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindZeroByIdAction extends Action
{
    public function run(Request $request)
    {
        $zero = Apiato::call('Zero@FindZeroByIdTask', [$request->id]);

        return $zero;
    }
}
