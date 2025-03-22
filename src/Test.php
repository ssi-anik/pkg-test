<?php

namespace Anik\PkgTest;

class Test
{
    public static function sum(int $a, int $b, int $c): int
    {
        return $a + $b + $c;
    }

    public static function sub(int $a, int $b): int
    {
        return $a - $b;
    }

    public static function div(int $a, int $b): float
    {
        if ($b == 0) {
            throw new \Exception('Division by zero');
        }

        return $a / $b;
    }
}
