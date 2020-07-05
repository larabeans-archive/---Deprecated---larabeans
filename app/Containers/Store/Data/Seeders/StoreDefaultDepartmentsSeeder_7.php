<?php

namespace App\Containers\Store\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class StoreDefaultDepartmentsSeeder_7 extends Seeder
{
    public function run()
    {
        // Default Store Branch Seeder ---------------------------------------------
        $store = Apiato::call('Store@FindStoreByNameTask', ['Default Store']);

        Apiato::call('Store@CreateStoreDepartmentTask', [$store->id, 'Stock']);
        Apiato::call('Store@CreateStoreDepartmentTask', [$store->id, 'Sale']);
        Apiato::call('Store@CreateStoreDepartmentTask', [$store->id, 'Purchase']);
        Apiato::call('Store@CreateStoreDepartmentTask', [$store->id, 'Account']);
        Apiato::call('Store@CreateStoreDepartmentTask', [$store->id, 'Transport']);
        Apiato::call('Store@CreateStoreDepartmentTask', [$store->id, 'Support']);
    }
}
