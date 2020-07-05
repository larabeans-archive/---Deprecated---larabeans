<?php

namespace App\Containers\Store\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class StoreRepository
 */
class StoreRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
