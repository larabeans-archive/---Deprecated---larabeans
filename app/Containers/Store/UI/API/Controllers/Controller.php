<?php

namespace App\Containers\Store\UI\API\Controllers;

use App\Containers\Store\Data\Transporters\CreateStoreTransporter;
use App\Containers\Store\UI\API\Requests\CreateStoreRequest;
use App\Containers\Store\UI\API\Requests\DeleteStoreRequest;
use App\Containers\Store\UI\API\Requests\GetAllStoresRequest;
use App\Containers\Store\UI\API\Requests\FindStoreByIdRequest;
use App\Containers\Store\UI\API\Requests\UpdateStoreRequest;
use App\Containers\Store\UI\API\Transformers\StoreTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Store\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createStore(CreateStoreRequest $request)
    {
        $store = Apiato::call('Store@CreateStoreAction', [
            new CreateStoreTransporter([
                'name' => $request->name
            ])
        ]);

        return $this->created($this->transform($store, StoreTransformer::class));
    }

    /**
     * @param FindStoreByIdRequest $request
     * @return array
     */
    public function findStoreById(FindStoreByIdRequest $request)
    {
        $store = Apiato::call('Store@FindStoreByIdAction', [$request]);

        return $this->transform($store, StoreTransformer::class);
    }

    /**
     * @param GetAllStoresRequest $request
     * @return array
     */
    public function getAllStores(GetAllStoresRequest $request)
    {
        $stores = Apiato::call('Store@GetAllStoresAction', [$request]);

        return $this->transform($stores, StoreTransformer::class);
    }

    /**
     * @param UpdateStoreRequest $request
     * @return array
     */
    public function updateStore(UpdateStoreRequest $request)
    {
        $store = Apiato::call('Store@UpdateStoreAction', [$request]);

        return $this->transform($store, StoreTransformer::class);
    }

    /**
     * @param DeleteStoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteStore(DeleteStoreRequest $request)
    {
        Apiato::call('Store@DeleteStoreAction', [$request]);

        return $this->noContent();
    }
}
