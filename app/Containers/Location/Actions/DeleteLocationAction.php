<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteLocationAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Location@DeleteLocationTask', [$request->id]);
    }
}
