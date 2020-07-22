<?php

namespace App\Containers\Tenant\UI\API\Controllers;

use App\Containers\Tenant\UI\API\Requests\CreateTenantRequest;
use App\Containers\Tenant\UI\API\Requests\DeleteTenantRequest;
use App\Containers\Tenant\UI\API\Requests\GetAllTenantsRequest;
use App\Containers\Tenant\UI\API\Requests\FindTenantByIdRequest;
use App\Containers\Tenant\UI\API\Requests\UpdateTenantRequest;
use App\Containers\Tenant\UI\API\Transformers\TenantTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Tenant\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateTenantRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createTenant(CreateTenantRequest $request)
    {
        $tenant = Apiato::call('Tenant@CreateTenantAction', [$request]);

        return $this->created($this->transform($tenant, TenantTransformer::class));
    }

    /**
     * @param FindTenantByIdRequest $request
     * @return array
     */
    public function findTenantById(FindTenantByIdRequest $request)
    {
        $tenant = Apiato::call('Tenant@FindTenantByIdAction', [$request]);

        return $this->transform($tenant, TenantTransformer::class);
    }

    /**
     * @param GetAllTenantsRequest $request
     * @return array
     */
    public function getAllTenants(GetAllTenantsRequest $request)
    {
        $tenants = Apiato::call('Tenant@GetAllTenantsAction', [$request]);

        return $this->transform($tenants, TenantTransformer::class);
    }

    /**
     * @param UpdateTenantRequest $request
     * @return array
     */
    public function updateTenant(UpdateTenantRequest $request)
    {
        $tenant = Apiato::call('Tenant@UpdateTenantAction', [$request]);

        return $this->transform($tenant, TenantTransformer::class);
    }

    /**
     * @param DeleteTenantRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteTenant(DeleteTenantRequest $request)
    {
        Apiato::call('Tenant@DeleteTenantAction', [$request]);

        return $this->noContent();
    }
}
