<?php

namespace App\Containers\Store\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindStoreByIdAction extends Action
{
    public function run(Request $request)
    {
        $store = Apiato::call('Store@FindStoreByIdTask', [$request->id]);

        return $store;
    }
}
