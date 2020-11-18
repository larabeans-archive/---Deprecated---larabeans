<?php

namespace App\Containers\Location\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class StateRepository
 */
class StateRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
