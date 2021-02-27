<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateCountryAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $country = Apiato::call('Location@CreateCountryTask', [
            $data->name,
            $data->alpha2,
            $data->alpha3,
            $data->isd,
            $data->capital,
            $data->currency,
            $data->native,
            $data->continent,
            $data->subcontinent,
            $data->emoji,
            $data->emojiUnicode
        ]);

        return $country;
    }
}
