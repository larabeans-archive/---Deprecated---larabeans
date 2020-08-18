<?php

namespace App\Containers\Tenant\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteTenantAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Tenant@DeleteTenantTask', [$request->id]);
    }
}
