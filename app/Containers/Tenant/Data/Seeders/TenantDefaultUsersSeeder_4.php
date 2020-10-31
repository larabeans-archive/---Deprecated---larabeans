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

        // Create use location, one way
        $location = Apiato::call('Location@CreateLocationTask', [
            get_class($user),
            $user->id,
            'street #3',
            'House #23',
            'Islamabad',
            'Islamabad',
            'pk',
            '0213 566',
            '0.899656565',
            '0.323565666'
        ]);

        // Create use location, other way
        // $user->locations()->create([
        //   'address_line_1' => 'street #3',
        //   'address_line_2' => 'House #23',
        //   'city' => 'Islamabad',
        //   'state_id' => 'Islamabad',
        //   'country_id' => 'pk',
        //   'post_code' => '0213 566',
        //   'latitude' => '0.899656565',
        //   'longitude' => '0.323565666',
        // ]);
    }
}
