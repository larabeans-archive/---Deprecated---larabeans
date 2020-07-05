<?php

namespace App\Containers\Zero\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteZeroAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Zero@DeleteZeroTask', [$request->id]);
    }
}
