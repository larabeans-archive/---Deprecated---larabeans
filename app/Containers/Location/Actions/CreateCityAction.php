<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCityAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $city = Apiato::call('Location@CreateCityTask', [
            $data->country_id,
            $data->state_id,
            $data->name,
            $data->latitude,
            $data->longitude
        ]);

        return $city;
    }
}
