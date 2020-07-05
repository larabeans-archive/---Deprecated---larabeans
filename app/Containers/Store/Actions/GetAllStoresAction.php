<?php

namespace App\Containers\Store\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllStoresAction extends Action
{
    public function run(Request $request)
    {
        $stores = Apiato::call('Store@GetAllStoresTask', [], ['addRequestCriteria']);

        return $stores;
    }
}
