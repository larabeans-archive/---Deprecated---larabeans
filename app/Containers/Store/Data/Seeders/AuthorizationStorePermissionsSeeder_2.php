<?php

namespace App\Containers\Store\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class AuthorizationStorePermissionsSeeder_2
 * @package App\Containers\Store\Data\Seeders
 * @version 0.2.0
 *
 * @author Syed Ali Kazmi <ali@kazmi.me>
 */
class AuthorizationStorePermissionsSeeder_2 extends Seeder
{
    /**
     * Run Database Seeder
     *
     * @return void
     */
    public function run()
    {
        // Default Store Management Permissions ----------------------------------------------------------
        Apiato::call('Authorization@CreatePermissionTask', ['view-store', 'View Store Permissions.']);
        Apiato::call('Authorization@CreatePermissionTask', ['edit-store', 'Edit Store Permission.']);
        Apiato::call('Authorization@CreatePermissionTask', ['delete-store', 'Delete Store Permissions.']);
        Apiato::call('Authorization@CreatePermissionTask', ['create-store', 'Create Store Permission.']);

        // Default Store Dashboard Permissions -----------------------------------------------------------
        Apiato::call('Authorization@CreatePermissionTask', ['store-dashboard', 'Access the store dashboard.']);

        // Default Store Role/Permission Management Permissions ------------------------------------------
        Apiato::call('Authorization@CreatePermissionTask', ['create-store-role', 'Create Store User Role Permission.']);
        Apiato::call('Authorization@CreatePermissionTask', ['create-store-permission', 'Create Store User Permission Permission.']);

        // Default Store User Management Permissions -----------------------------------------------------
        Apiato::call('Authorization@CreatePermissionTask', ['create-store-admin', 'Create Store Admin Permission.']);
        Apiato::call('Authorization@CreatePermissionTask', ['edit-store-admin', 'Edit Store Admin Permission.']);
        Apiato::call('Authorization@CreatePermissionTask', ['delete-store-admin', 'Delete Store Admin Permission.']);
        Apiato::call('Authorization@CreatePermissionTask', ['view-store-admin', 'View Store Admin Permission.']);

        Apiato::call('Authorization@CreatePermissionTask', ['create-store-general-manager', 'Create new Users (Partial Admins) Permission.']);
        Apiato::call('Authorization@CreatePermissionTask', ['create-store-manager', 'Create new Users (Partial Admins) Permission.']);
        Apiato::call('Authorization@CreatePermissionTask', ['create-store-user', 'Create new Users (Non Admins) Permission.']);

        // TODO-SAMK: More permissions to be added as development proceeds
        // Stock Department User Permissions
        // Sale Department User Permissions
        // Account Department User User Permissions
        // Transport Department User Permissions

    }
}
