<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return view("home.index", [
            'name' => 'Mehedi',
            'surname' => 'Hasan',
            'job' => "<b> DEV </b>",
            "hobbies" => ['coding', 'gaming'],
        ]);

        // return view("home.index")
        //     ->with('name', 'Mehedi')
        //     ->with('surname', 'Hasan');

        /*another way of showing a view*/  //view-facade

        //return View::make('home.index');

        //It first checks whether the requested route is /about; if a match is found, it displays the corresponding result—otherwise, it proceeds to evaluate alternative routes.
        // return View::first(['about', 'home.index']);

        /*another way of showing a view*/
        // if(view::exists('home.index')){
        //     dump('view does not exist!');
        // }

    }
}
