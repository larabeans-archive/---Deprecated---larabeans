<?php

namespace App\Containers\Tenant\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class CreateTenantTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            'id',
            'name',
            'is_active'
        ],
        'required'   => [
            'name'
        ],
        'default'    => [
          'is_active' => false
        ]
    ];
}
