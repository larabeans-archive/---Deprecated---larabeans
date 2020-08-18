<?php

namespace App\Containers\Tenant\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class TenantPermissionsSeeder_2 extends Seeder
{
    public function run()
    {
      // Default Tenant Management Permissions ----------------------------------------------------------
      Apiato::call('Authorization@CreatePermissionTask', ['view-tenant', 'View Tenant Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['edit-tenant', 'Edit Tenant Permission.']);
      Apiato::call('Authorization@CreatePermissionTask', ['delete-tenant', 'Delete Tenant Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['create-tenant', 'Create Tenant Permission.']);
    }
}
