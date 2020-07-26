<?php

namespace App\Containers\Store\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class StoreDefaultLocationsSeeder_16 extends Seeder
{
    public function run()
    {
        // Default Store Branch Location Seeder ---------------------------------------------
        $branch = Apiato::call('Store@FindStoreBranchByNameTask', ['Default Branch']);

        Apiato::call('Store@CreateStoreLocationTask', [
            $branch->id,
            'Default Location Address Line 1',
            'Default Location Address Line 2',
            '46600',
            'Islamabad',
            'Federal',
            'Pakistan',
            '+92 051 5555 789',
            '+92 051 5555 790'
        ]);
    }
}
