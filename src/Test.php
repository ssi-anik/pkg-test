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
}
