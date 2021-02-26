<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCountryAction extends Action
{
    public function run(Request $request)
    {
        $country = Apiato::call('Location@FindCountryTask', [$request->id]);

        return $country;
    }
}
