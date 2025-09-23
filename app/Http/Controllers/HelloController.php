<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function welcome()
    {

        // $cars = Car::get();
        // dump($cars);

        // //Select all cars that match
        // $cars = Car::where('published_at', '!=', null)->get();
        // dump($cars);

        // //Select the first car that matches
        // $car = Car::where('published_at', '!=', null)->first();
        // dump($car);

        // //Fetching cars in descending order
        // $car = Car::orderBy('created_at', 'desc')->get();
        // dump($car);

        // //Fetching limited cars
        // $car = Car::limit(2)->get();
        // dump($car);

        // $car = Car::where('created_at', '!=', null)
        //     ->where('maker_id', 1)
        //     ->orderBy('price', 'desc')
        //     ->get();
        // dump($car);

        // dd(
        //     \App\Models\Maker::find(1),
        //     \App\Models\Model::find(1),
        //     \App\Models\CarType::find(1),
        //     \App\Models\FuelType::find(1),
        //     \App\Models\User::find(1),
        //     \App\Models\City::find(1)
        // );

        // $car = new Car();
        // $car->maker_id = 1;
        // $car->model_id = 1;
        // $car->year = 1;
        // $car->price = 1;
        // $car->vin = "1";
        // $car->mileage = 1;
        // $car->car_type_id = 1;
        // $car->fuel_type_id = 1;
        // $car->user_id = 1;
        // $car->city_id = 1;
        // $car->address = "LOREM IPSUM";
        // $car->phone = "984723749";
        // $car->description = null;
        // $car->published_at = now();
        // $car->save();

        // $car = Car::find(1);
        // $car->price = 99999;
        // $car->save();

        // Car::updateOrCreate(
        //     ['vin' => '9999', 'price' => 20000],
        //     ['price' => 44444]
        // );

        // Car::where('published_at', null)
        //     ->where('user_id', 1)
        //     ->update(['published_at' => now()]);

        // $car = Car::find(1);
        // $car->delete();

        // Car::destroy(2, 3);

        // Car::where('published_at', null)->delete();

        //Car::truncate();

        // $cars = Car::where("price", ">", 20000)->get();
        // dump($cars);

        // $cars = Car::where("maker_id", 1)->get();
        // dump($cars);

        // Car::find(1)
        //     ->update(['price' => 15000]);

        // Car::where("year", "<", 2020)
        //     ->delete();

        // FuelType::create(['name'=>'Hydrogen']);

        return view('hello.welcome', [
            'first_name' => 'Mehedi',
            'last_name' => 'Hasan'
        ]);
    }
}
