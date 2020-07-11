<?php

namespace App\Containers\Store\UI\WEB\Controllers;

use App\Containers\Store\UI\WEB\Requests\CreateStoreRequest;
use App\Containers\Store\UI\WEB\Requests\DeleteStoreRequest;
use App\Containers\Store\UI\WEB\Requests\GetAllStoresRequest;
use App\Containers\Store\UI\WEB\Requests\FindStoreByIdRequest;
use App\Containers\Store\UI\WEB\Requests\UpdateStoreRequest;
use App\Containers\Store\UI\WEB\Requests\StoreStoreRequest;
use App\Containers\Store\UI\WEB\Requests\EditStoreRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Store\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllStoresRequest $request
     */
    public function index(GetAllStoresRequest $request)
    {
        $stores = Apiato::call('Store@GetAllStoresAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindStoreByIdRequest $request
     */
    public function show(FindStoreByIdRequest $request)
    {
        $store = Apiato::call('Store@FindStoreByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateStoreRequest $request
     */
    public function create(CreateStoreRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreStoreRequest $request
     */
    public function store(StoreStoreRequest $request)
    {
        $store = Apiato::call('Store@CreateStoreAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditStoreRequest $request
     */
    public function edit(EditStoreRequest $request)
    {
        $store = Apiato::call('Store@GetStoreByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateStoreRequest $request
     */
    public function update(UpdateStoreRequest $request)
    {
        $store = Apiato::call('Store@UpdateStoreAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteStoreRequest $request
     */
    public function delete(DeleteStoreRequest $request)
    {
         $result = Apiato::call('Store@DeleteStoreAction', [$request]);

         // ..
    }
}
