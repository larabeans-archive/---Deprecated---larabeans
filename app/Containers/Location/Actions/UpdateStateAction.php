<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateStateAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $state = Apiato::call('Location@UpdateStateTask', [$request->id, $data]);

        return $state;
    }
}
