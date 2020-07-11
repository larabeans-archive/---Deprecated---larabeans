<?php

namespace App\Containers\Store\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteStoreAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Store@DeleteStoreTask', [$request->id]);
    }
}
