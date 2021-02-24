<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindLocationAction extends Action
{
    public function run(Request $request)
    {
        $location = Apiato::call('Location@FindLocationTask', [$request->id]);

        return $location;
    }
}
