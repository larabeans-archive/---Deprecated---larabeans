<?php

namespace App\Containers\Location\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class MobileLocationRepository
 */
class MobileLocationRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
