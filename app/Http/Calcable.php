<?php

namespace App\Http;

class Calcable
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function sum($num)
    {
        return new static(Calc::sum($this->value, $num));
    }

    public function sub($num)
    {
        return new static(Calc::sub($this->value, $num));
    }

    public function mul($num)
    {
        return new static(Calc::mul($this->value, $num));
    }

    public function div($num)
    {
        return new static(Calc::div($this->value, $num));
    }
}
