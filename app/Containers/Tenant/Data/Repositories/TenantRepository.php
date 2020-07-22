<?php

namespace App\Containers\Tenant\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class TenantRepository
 */
class TenantRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
