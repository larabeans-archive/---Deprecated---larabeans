<?php

namespace App\Containers\Zero\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateZeroAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $zero = Apiato::call('Zero@UpdateZeroTask', [$request->id, $data]);

        return $zero;
    }
}
