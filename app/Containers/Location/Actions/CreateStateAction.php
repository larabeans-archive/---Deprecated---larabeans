<?php

namespace App\Containers\Location\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Transporters\DataTransporter;

class CreateStateAction extends Action
{
    public function run(DataTransporter $data)
    {
        $state = Apiato::call('Location@CreateStateTask', [
            0,
            $data->country_id,
            $data->name,
            $data->code
        ]);

        return $state;
    }
}
