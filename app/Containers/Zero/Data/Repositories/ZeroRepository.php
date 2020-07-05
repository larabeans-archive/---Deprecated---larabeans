<?php

namespace App\Containers\Zero\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ZeroRepository
 */
class ZeroRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
