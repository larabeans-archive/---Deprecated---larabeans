<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCityAction extends Action
{
    public function run(Request $request)
    {
        $city = Apiato::call('Location@FindCityTask', [$request->id]);

        return $city;
    }
}
