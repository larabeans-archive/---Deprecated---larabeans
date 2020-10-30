<?php
namespace App\Containers\Location\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;
use App\Containers\Location\Traits\CountrySourceData;

class CountrySeeder extends Seeder
{
    use CountrySourceData;

    public function run()
    {
        $countries = self::get2d();
        Apiato::call('Location@FeedCountryDataTask', [ $countries ]) ;
    }
}
