<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllCountriesAction extends Action
{
    public function run(Request $request)
    {
        $countries = Apiato::call('Location@GetAllCountriesTask', [], ['addRequestCriteria']);

        return $countries;
    }
}
