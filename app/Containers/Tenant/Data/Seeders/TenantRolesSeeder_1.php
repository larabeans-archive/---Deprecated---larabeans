<?php

namespace App\Containers\Tenant\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class TenantRolesSeeder_1 extends Seeder
{
    public function run()
    {
      // Default Tenant Roles ----------------------------------------------------------------
      Apiato::call('Authorization@CreateRoleTask', ['tenant-admin', 'Tenant Administrator', 'Administrator Role', 999]);
    }
}
