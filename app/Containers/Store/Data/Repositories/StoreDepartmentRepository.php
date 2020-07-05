<?php

namespace App\Containers\Store\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class StoreDepartmentRepository
 */
class StoreDepartmentRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
