<?php
namespace App\Containers\Location\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $countries = CountriesArray::get2d();

        Apiato::call('Location@FeedCountryDataTask', [ $countries ]) ;

    }
}
