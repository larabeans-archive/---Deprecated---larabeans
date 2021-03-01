<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class CreateLocationAction extends Action
{
    public function run(DataTransporter $data)
    {
        $location = Apiato::call('Location@CreateLocationTask', [$data]);

        return $location;
    }
}
