<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllStatesAction extends Action
{
    public function run(Request $request)
    {
        $states = Apiato::call('Location@GetAllStatesTask', [], ['addRequestCriteria']);

        return $states;
    }
}
