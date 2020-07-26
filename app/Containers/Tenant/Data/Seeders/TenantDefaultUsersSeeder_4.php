<?php

namespace App\Containers\Tenant\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class TenantDefaultUsersSeeder_4 extends Seeder
{
    public function run()
    {
      // Default Store Admin (with their roles) ---------------------------------------------
      Apiato::call('User@CreateUserByCredentialsTask', [
        $isClient = false,
        'tenant-admin@larabeans.com',
        'tenant',
        'Tenant Admin',
      ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['tenant-admin']));
    }
}
