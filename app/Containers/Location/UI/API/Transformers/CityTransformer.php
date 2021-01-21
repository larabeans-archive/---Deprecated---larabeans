<?php

namespace App\Containers\Location\UI\API\Transformers;

use App\Containers\Location\Models\City;
use App\Ship\Parents\Transformers\Transformer;

class CityTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param City $entity
     *
     * @return array
     */
    public function transform(City $entity)
    {
        $response = [
            'object' => 'City',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
