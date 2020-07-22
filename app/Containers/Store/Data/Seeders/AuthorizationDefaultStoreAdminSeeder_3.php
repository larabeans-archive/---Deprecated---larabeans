<?php

namespace App\Containers\Store\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class AuthorizationDefaultStoreAdminSeeder_3 extends Seeder
{
    public function run()
    {
        // Default Store Admin (with their roles) ---------------------------------------------
        Apiato::call('User@CreateUserByCredentialsTask', [
            $isClient = false,
            'default-store@larabeans.com',
            'admin',
            'Store Admin',
        ])->assignRole(Apiato::call('Authorization@FindRoleTask', ['store-admin']));
    }
}
