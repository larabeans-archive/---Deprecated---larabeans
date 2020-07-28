<?php

namespace App\Containers\Tenant\Actions;

use App\Containers\Tenant\Data\Transporters\CreateTenantTransporter;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateTenantAction extends Action
{
    public function run(CreateTenantTransporter $data)
    {
        return Apiato::call('Tenant@CreateTenantTask', [null, $data->name]);
    }
}
