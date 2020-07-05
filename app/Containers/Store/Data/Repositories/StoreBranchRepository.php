<?php

namespace App\Containers\Store\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class StoreBranchRepository
 */
class StoreBranchRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
