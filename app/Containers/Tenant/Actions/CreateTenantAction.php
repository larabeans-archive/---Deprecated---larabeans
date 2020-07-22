<?php

namespace App\Containers\Tenant\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateTenantAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $tenant = Apiato::call('Tenant@CreateTenantTask', [$data]);

        return $tenant;
    }
}
