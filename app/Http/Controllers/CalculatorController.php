<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function sum(float $num1, float $num2)
    {
        $sum = $num1 + $num2;
        return "Sum is $sum";
    }

    public function subtract(float $num1, float $num2)
    {
        $subtract = $num1 - $num2;
        return "substraction is $subtract";
    }
}
