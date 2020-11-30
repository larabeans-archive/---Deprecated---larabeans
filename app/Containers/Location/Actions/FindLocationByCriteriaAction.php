<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindLocationByIdAction extends Action
{
    public function run(Request $request)
    {
        $location = Apiato::call('Location@FindLocationByIdTask', [$request->id]);

        return $location;
    }
}
