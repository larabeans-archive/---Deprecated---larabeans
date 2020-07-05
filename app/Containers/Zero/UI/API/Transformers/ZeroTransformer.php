<?php

namespace App\Containers\Zero\UI\API\Transformers;

use App\Containers\Zero\Models\Zero;
use App\Ship\Parents\Transformers\Transformer;

class ZeroTransformer extends Transformer
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
     * @param Zero $entity
     *
     * @return array
     */
    public function transform(Zero $entity)
    {
        $response = [
            'object' => 'Zero',
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
