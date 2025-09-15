<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function welcome()
    {
        return view('hello.welcome', [
            'first_name'=> 'Mehedi',
            'last_name'=> 'Hasan'
        ]);
    }
}
