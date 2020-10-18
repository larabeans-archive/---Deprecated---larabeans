<?php

namespace App\Containers\Location\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class LocationRepository
 */
class LocationRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
