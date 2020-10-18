<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllLocationsAction extends Action
{
    public function run(Request $request)
    {
        $locations = Apiato::call('Location@GetAllLocationsTask', [], ['addRequestCriteria']);

        return $locations;
    }
}
