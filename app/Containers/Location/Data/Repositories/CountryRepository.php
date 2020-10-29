<?php

namespace App\Containers\Location\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CountryRepository
 */
class CountryRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
