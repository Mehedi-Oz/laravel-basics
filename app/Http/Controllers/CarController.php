<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return 'CAR CONTROLLER!';
    }

    public function __invoke()
    {
        return 'invokable';
    }
}
