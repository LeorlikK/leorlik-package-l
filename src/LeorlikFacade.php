<?php

namespace Leorlik\PackageL;

use Illuminate\Support\Facades\Facade;

class LeorlikFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return StrService::class;
    }
}