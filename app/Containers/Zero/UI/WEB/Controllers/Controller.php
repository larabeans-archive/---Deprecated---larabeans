<?php

namespace App\Containers\Zero\UI\WEB\Controllers;

use App\Containers\Zero\UI\WEB\Requests\CreateZeroRequest;
use App\Containers\Zero\UI\WEB\Requests\DeleteZeroRequest;
use App\Containers\Zero\UI\WEB\Requests\GetAllZerosRequest;
use App\Containers\Zero\UI\WEB\Requests\FindZeroByIdRequest;
use App\Containers\Zero\UI\WEB\Requests\UpdateZeroRequest;
use App\Containers\Zero\UI\WEB\Requests\StoreZeroRequest;
use App\Containers\Zero\UI\WEB\Requests\EditZeroRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Zero\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllZerosRequest $request
     */
    public function index(GetAllZerosRequest $request)
    {
        $zeros = Apiato::call('Zero@GetAllZerosAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindZeroByIdRequest $request
     */
    public function show(FindZeroByIdRequest $request)
    {
        $zero = Apiato::call('Zero@FindZeroByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateZeroRequest $request
     */
    public function create(CreateZeroRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreZeroRequest $request
     */
    public function store(StoreZeroRequest $request)
    {
        $zero = Apiato::call('Zero@CreateZeroAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditZeroRequest $request
     */
    public function edit(EditZeroRequest $request)
    {
        $zero = Apiato::call('Zero@GetZeroByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateZeroRequest $request
     */
    public function update(UpdateZeroRequest $request)
    {
        $zero = Apiato::call('Zero@UpdateZeroAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteZeroRequest $request
     */
    public function delete(DeleteZeroRequest $request)
    {
         $result = Apiato::call('Zero@DeleteZeroAction', [$request]);

         // ..
    }
}
