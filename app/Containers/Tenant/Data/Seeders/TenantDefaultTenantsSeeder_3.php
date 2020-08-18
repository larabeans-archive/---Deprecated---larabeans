<?php

namespace App\Containers\Tenant\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\Config;

class TenantDefaultTenantsSeeder_3 extends Seeder
{
    public function run()
    {
      // Default Store Seeder ---------------------------------------------
      if(Config::get('tenant-container.enabled')){
        Apiato::call('Tenant@CreateTenantTask', [
          Config::get('tenant-container.default_id'),
          'Default Tenant',
          $isActive = true
        ]);
      }
    }
}
