<?php

namespace App\Containers\Store\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;
use phpDocumentor\Reflection\Types\Void_;

/**
 * Class AuthorizationStoreRolesSeeder_1
 * @package App\Containers\Store\Data\Seeders
 * @version 0.2.0
 * @author Syed Ali Kazmi <ali@kazmi.me>
 */
class StoreRolesSeeder_11 extends Seeder
{
    /**
     * Run Databse Seed
     *
     * @return void
     */
    public function run()
    {
        // Default Store Roles ----------------------------------------------------------------
        Apiato::call('Authorization@CreateRoleTask', ['store-admin', 'Store Administrator', 'Administrator Role', 999]);
        Apiato::call('Authorization@CreateRoleTask', ['store-general-manager', 'General Manager', 'General Manager Role', 999]);
        Apiato::call('Authorization@CreateRoleTask', ['store-branch-manager', 'Branch Manager', 'Branch Manager Role', 999]);
        Apiato::call('Authorization@CreateRoleTask', ['store-accountant', 'Accountant', 'Accountant Role', 999]);
        Apiato::call('Authorization@CreateRoleTask', ['store-stock-controller', 'Stock Controller', 'Stock Controller Role', 999]);
        Apiato::call('Authorization@CreateRoleTask', ['store-cashier', 'Cashier', 'Cashier Role', 999]);
        Apiato::call('Authorization@CreateRoleTask', ['store-salesman', 'Salesman', 'Salesman Role', 999]);
        Apiato::call('Authorization@CreateRoleTask', ['store-deliveryman', 'Deliveryman', 'Deliveryman Role', 999]);
        Apiato::call('Authorization@CreateRoleTask', ['store-support-staff', 'Support Staff', 'Support Staff Role', 999]);
    }
}
