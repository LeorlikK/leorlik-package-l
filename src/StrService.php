<?php

namespace Leorlik\PackageL;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class StrService
{
    public static string $string = 'Static Const';
    public string $name;
    public int $age;

    public function __construct()
    {
        $this->name = config('leorlik.name', 'defaultName');
        $this->age = config('leorlik.age', 'defaultAge');
    }

    public static function printString(): void
    {
        echo self::$string;
    }

    public function sum(): string
    {
        $shortName = Str::substr($this->name, 0, 3);

        $date = Carbon::createFromDate('2024', '01', '28')->format('Y:m:d');

        return join(' - ', [$shortName, $date, $this->age]);
    }
}