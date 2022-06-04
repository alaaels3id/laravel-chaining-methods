<?php

namespace App\Http\Controllers;

use App\Http\Calc;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        // $res2 = Calc::of(10)->sum(10)->mul(4)->sub(5)->div(2);

        $res = Str::of('COOL')->lower()->ucfirst();
    }
}
