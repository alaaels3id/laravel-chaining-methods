<?php

namespace App\Http;

class Calc
{
    public static function of($num)
    {
        return new Calcable($num);
    }

    public static function sum($num1, $num2)
    {
        return $num1 + $num2;
    }

    public static function sub($num1, $num2)
    {
        return $num1 - $num2;
    }

    public static function mul($num1, $num2)
    {
        return $num1 * $num2;
    }

    public static function div($num1, $num2)
    {
        return $num2 != 0 ? $num1 / $num2 : 'can not divide on zero';
    }
}
