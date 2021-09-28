<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function addMiddlewaresFor($modelName)
    {
        $this->middleware("permission:Create-$modelName|Update-$modelName|Delete-$modelName|History-$modelName", ['only' => ['manage']]);
        $this->middleware("permission:Create-$modelName", ['only' => ['create', 'store']]);
        $this->middleware("permission:Update-$modelName", ['only' => ['edit', 'update']]);
        $this->middleware("permission:Delete-$modelName", ['only' => ['destroy']]);
    }
}
