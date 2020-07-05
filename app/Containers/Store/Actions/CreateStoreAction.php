<?php

namespace App\Containers\Store\Actions;

use App\Containers\Store\Data\Transporters\CreateStoreTransporter;
use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateStoreAction extends Action
{
    public function run(CreateStoreTransporter $data)
    {
        return Apiato::call('Store@CreateStoreTask', [$data->name])
                    ->assignOwner(Apiato::call('Authentication@GetAuthenticatedUserTask'));
    }
}
