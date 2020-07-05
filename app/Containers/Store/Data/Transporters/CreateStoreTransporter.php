<?php

namespace App\Containers\Store\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class CreateStoreTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            'name',

            // allow for undefined properties
            // 'additionalProperties' => true,
        ],
        'required'   => [
            'name',
        ],
        'default'    => [

        ]
    ];
}
