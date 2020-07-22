<?php

namespace App\Containers\Store\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class StoreDefaultStoreSeeder_4 extends Seeder
{
    public function run()
    {
        // Default Store Seeder ---------------------------------------------
        Apiato::call('Store@CreateStoreTask', [
            'Default Store',
        ])->assignOwner(Apiato::call('User@FindUserByEmailTask', ['default-store@larabeans.com']));
    }
}
