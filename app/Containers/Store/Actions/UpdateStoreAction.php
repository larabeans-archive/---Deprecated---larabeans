<?php

namespace App\Containers\Store\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateStoreAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $store = Apiato::call('Store@UpdateStoreTask', [$request->id, $request->name]);

        return $store;
    }
}
