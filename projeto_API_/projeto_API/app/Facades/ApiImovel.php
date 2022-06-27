<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ApiImovel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "api-imovel";
    }
}
