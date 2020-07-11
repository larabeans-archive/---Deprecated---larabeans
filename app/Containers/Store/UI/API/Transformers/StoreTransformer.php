<?php

namespace App\Containers\Store\UI\API\Transformers;

use App\Containers\Store\Models\Store;
use App\Ship\Parents\Transformers\Transformer;
use App\Containers\User\UI\API\Transformers\UserTransformer;

class StoreTransformer extends Transformer
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
        'owner'
    ];

    /**
     * @param Store $entity
     *
     * @return array
     */
    public function transform(Store $entity)
    {
        $response = [
            'object' => 'Store',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }

    public function includeOwner(Store $entity)
    {
        return $this->collection($entity->owner, new UserTransformer());
    }
}
