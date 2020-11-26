<?php
namespace App\Containers\Location\Data\Seeders;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Seeders\Seeder;

class CountryStateCitySeeder extends Seeder
{
    public function run()
    {
        /**
         * -------------------------------------------------------------
         *  SOURCE                      | DB
         * -------------------------------------------------------------
         *  iso2                        | alpha2
         *  iso3                        | alpha3
         *  phone_code                  | isd
         *  region                      | continent
         *  subregion                   | subcontinent
         *                              |
         */

        $countriesRaw = file_get_contents(base_path('app/Containers/Location/Data/Source/countries.json'));
        $statesRaw = file_get_contents(base_path('app/Containers/Location/Data/Source/states.json'));
        $citiesRaw = file_get_contents(base_path('app/Containers/Location/Data/Source/cities.json'));

        $countries = json_decode($countriesRaw, true);
        $states = json_decode($statesRaw, true);
        $cities = json_decode($citiesRaw, true);


        foreach ($countries as $country) {
            $country = (object) $country;
            Apiato::call('Location@CreateCountryTask', [
                $country->id ? $country->id : '',
                $country->name ? $country->name : '',
                $country->iso2 ? $country->iso2 : '',
                $country->iso3 ? $country->iso3 : '',
                $country->phone_code ? $country->phone_code : '',
                $country->capital ? $country->capital : '',
                $country->currency ? $country->currency : '',
                $country->native ? $country->native : '',
                $country->region ? $country->region : '',
                $country->subregion ? $country->subregion : '',
                $country->emoji ? $country->emoji : '',
                $country->emojiU ? $country->emojiU : ''
            ]) ;
        }

//        foreach ($states as $state) {
//            $state = (object) $state;
//            Apiato::call('Location@CreateStateTask', [
//                $state->id ? $state->id : '',
//                $state->country_id ? $state->country_id : '',
//                $state->name ? $state->name : '',
//                $state->state_code ? $state->state_code : '',
//            ]) ;
//        }

//        foreach ($cities as $city) {
//            $city = (object) $city;
//            Apiato::call('Location@CreateCityTask', [
//                $city->id ? $city->id : '',
//                $city->country_id ? $city->country_id : '',
//                $city->state_id ? $city->state_id : '',
//                $city->name ? $city->name : '',
//                $city->latitude ? $city->latitude : '',
//                $city->longitude ? $city->longitude : '',
//            ]) ;
//        }
    }
}
