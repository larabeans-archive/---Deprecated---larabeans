<?php

namespace App\Containers\Store\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class StoreLocationRepository
 */
class StoreLocationRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
