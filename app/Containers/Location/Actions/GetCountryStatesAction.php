<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetCountryStatesAction extends Action
{
    public function run(Request $request)
    {
        $state = Apiato::call('Location@GetCountryStatesTask', [$request->id]);

        return $state;
    }
}
