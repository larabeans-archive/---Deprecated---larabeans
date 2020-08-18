<?php

namespace App\Containers\Tenant\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllTenantsAction extends Action
{
    public function run(Request $request)
    {
        $tenants = Apiato::call('Tenant@GetAllTenantsTask', [], ['addRequestCriteria']);

        return $tenants;
    }
}
