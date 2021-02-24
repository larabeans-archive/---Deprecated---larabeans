<?php

namespace App\Containers\Location\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class LocationPermissionsSeeder extends Seeder
{
    public function run()
    {
      // Default Location Management Permissions ----------------------------------------------------------
      Apiato::call('Authorization@CreatePermissionTask', ['manage-locations', 'Manage Location Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['list-locations', 'View All Locations Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['view-location', 'View Location Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['update-location', 'Edit Location Permission.']);
      Apiato::call('Authorization@CreatePermissionTask', ['delete-location', 'Delete Location Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['create-location', 'Create Location Permission.']);

      Apiato::call('Authorization@CreatePermissionTask', ['manage-countries', 'Manage Country Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['view-country', 'View Country Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['update-country', 'Edit Country Permission.']);
      Apiato::call('Authorization@CreatePermissionTask', ['delete-country', 'Delete Country Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['create-country', 'Create Country Permission.']);

      Apiato::call('Authorization@CreatePermissionTask', ['manage-states', 'Manage States Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['view-state', 'View State Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['update-state', 'Edit State Permission.']);
      Apiato::call('Authorization@CreatePermissionTask', ['delete-state', 'Delete State Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['create-state', 'Create State Permission.']);

      Apiato::call('Authorization@CreatePermissionTask', ['manage-cities', 'Manage Cities Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['view-city', 'View City Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['update-city', 'Edit City Permission.']);
      Apiato::call('Authorization@CreatePermissionTask', ['delete-city', 'Delete City Permissions.']);
      Apiato::call('Authorization@CreatePermissionTask', ['create-city', 'Create City Permission.']);
    }
}
