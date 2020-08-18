<?php

namespace App\Containers\Tenant\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindTenantByIdAction extends Action
{
    public function run(Request $request)
    {
        $tenant = Apiato::call('Tenant@FindTenantByIdTask', [$request->id]);

        return $tenant;
    }
}
