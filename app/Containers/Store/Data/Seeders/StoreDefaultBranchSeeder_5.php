<?php

namespace App\Containers\Store\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class StoreDefaultBranchSeeder_5 extends Seeder
{
    public function run()
    {
        // Default Store Branch Seeder ---------------------------------------------
        $store = Apiato::call('Store@FindStoreByNameTask', ['Default Store']);

        Apiato::call('Store@CreateStoreBranchTask', [
            $store->id,
            'Default Branch'
        ]);
    }
}
