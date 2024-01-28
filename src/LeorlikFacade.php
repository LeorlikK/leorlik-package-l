<?php

namespace Leorlik\PackageL;

use Illuminate\Support\Facades\Facade;

class LeorlikFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return StrService::class;
    }
}