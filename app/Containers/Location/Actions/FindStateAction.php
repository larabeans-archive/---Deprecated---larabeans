<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindStateAction extends Action
{
    public function run(Request $request)
    {
        $state = Apiato::call('Location@FindStateTask', [$request->id]);

        return $state;
    }
}
