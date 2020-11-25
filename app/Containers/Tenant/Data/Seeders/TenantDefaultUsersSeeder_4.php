<?php

namespace App\Containers\Tenant\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class TenantDefaultUsersSeeder_4 extends Seeder
{
    public function run()
    {
        // Default Store Admin (with their roles) ---------------------------------------------
        $user = Apiato::call('User@CreateUserByCredentialsTask', [
          $isClient = false,
          'tenant-admin@larabeans.com',
          'tenant',
          'Tenant Admin',
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['tenant-admin']));

        // User location
        Apiato::call('Location@CreateLocationTask', [
            get_class($user),
            $user->id,
            'House #335, Street #17',
            'Bla Bla Town, Phase 1',
            85475, // Islamabad
            3169,  // Islamabad Capital Territory
            167,   // Pakistan
            '0213 566',
            '0.899656565',
            '0.323565666'
        ]);
    }
}
