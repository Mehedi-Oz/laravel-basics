<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        // return view("home.index", [
        //     'name' => 'Mehedi',
        //     'surname' => 'Hasan',
        //     'job' => "<b> DEV </b>",
        //     "hobbies" => ['coding', 'gaming'],
        //     "country" => "bn"
        // ]);

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


        // Retrieve car with ID 1 and dump its features and primary image
        // $car = Car::find(1);
        // dd($car->features, $car->primaryImage);

        // Dump only the features of car ID 1
        // dd($car->features); 

        // Update the 'abs' feature value for car ID 1
        // $car->features->abs = 6;
        // $car->features->save();

        // Update the 'gps_navigation' feature value for car ID 1
        // $car->features->update(["gps_navigation" => 10]);

        // Delete the primary image associated with car ID 1
        // $car->primaryImage->delete();


        // Attempt to delete CarFeatures row for car ID 2 (incorrect usage)
        // $car = Car::find(2);
        // $car->features->where("car_id", 2)->delete(); // ❌ 'features' returns a single model, not a query builder

        // Create a new CarFeatures record for car ID 2 with all features set to false
        // $car = Car::find(2);
        // $carFeatures = new CarFeatures([
        //     "abs" => false,
        //     "air_conditioning" => false,
        //     "power_windows" => false,
        //     "power_door_locks" => false,
        //     "cruise_control" => false,
        //     "bluetooth_connectivity" => false,
        //     "remote_start" => false,
        //     "gps_navigation" => false,
        //     "heated_seats" => false,
        //     "climate_control" => false,
        //     "rear_parking_sensors" => false,
        //     "leather_seats" => false,
        // ]);
        // $car->features()->save($carFeatures);


        // Retrieve car with ID 1
        // $car = Car::find(1);

        // Dump all images associated with car ID 1
        // // dd($car->images);

        // Create a single new image for car ID 1
        // // $image = new CarImage(["image_path" => "something", "position" => 2]);
        // // $car->images()->save($image);

        // Create a new image using shorthand
        // $car->images()->create(["image_path" => "else", "position" => 4]);

        // Save multiple new images using saveMany()
        // $car->images()->saveMany([
        //    new CarImage(["image_path" => "else 5", "position" => 5]),
        //    new CarImage(["image_path" => "else 6", "position" => 6]),
        //]);

        // Create multiple images using createMany()
        // $car->images()->createMany([
        //    ["image_path" => "else 7", "position" => 7],
        //    ["image_path" => "else 8", "position" => 8],
        //]);


        // Retrieve car with ID 1 and dump its car type
        // $car = Car::find(1);
        // // dd($car->carType);

        // Find CarType named "Toyota" and dump all cars of that type
        // $carType = CarType::where("name", "Toyota")->first();
        // dd($carType->cars);

        // Alternative way to get cars belonging to a CarType
        // // $cars = Car::whereBelongsTo($carType)->get();
        // $cars = $carType->cars;
        // dd($cars);


        // Associate car ID 1 with a new CarType named "Porsche"
        // $car = Car::find(1);
        // $carType = CarType::where("name", "Porsche")->first();
        // // $car->car_type_id = $carType->id;
        // // $car->save();

        // Use Eloquent's associate() method to link car to CarType
        // $car->carType()->associate($carType);
        // $car->save();


        // $car = Car::find(1);
        // dd($car->favouredUsers);

        // $user = User::find(1);
        // dd($user->favouriteCars);

        // DB::table('favourite_cars')->truncate();


        // $user = User::find(1);
        // $user->favouriteCars()->attach([1, 2]);
        // // $user->favouriteCars()->sync([2]); //removes previuosly selected favourites and add the new selected one
        // $user->favouriteCars()->syncWithPivotValues([2], []);

        // $user->favouriteCars()->detach([1, 2]); //similar to sync


        // $maker = Maker::factory()->count(10)->create(); //saves fake data to the Database
        // $maker = Maker::factory()->count(10)->make(); //just shows the fake data
        // dd($maker);

        // user::factory()->count(10)->create(['name' => 'Hasan']);

        //        user::factory()
//            ->count(10)
////            ->sequence(["name" => "Muhammad"], ["name" => "Maha"])
//            ->sequence(fn (Sequence $sequence) => ["name"=> 'Name '. $sequence->index])
////            ->unverified() //unverified data
////            ->trashed()  //provides values at deleted column
//            ->create();

        //        User::factory() //Factory Callback //after creating a user dumps the data
//            ->afterCreating(function ($user) {
//                dump ($user);
//            })->create();


        // Maker::factory()
        //     ->count(5)
        //     ->hasModels(5)
        //     ->create();

        // Maker::factory()
        //     ->count(1)
        //     ->hasModels(1, ["name" => "dummy car"])
        //     ->create();

        // User::factory() //all the users will have the same phone number as the user is created
        //     ->count(1)
        //     ->hasCars(1, function (array $attributes, User $user) {
        //         return ['phone' => $user->phone];
        //     })
        //     ->create();

        // Maker::factory()
        //     ->count(1)
        //     ->hasModels(1, function (array $attributes, Maker $maker) {
        //         return [];
        //     })
        //     ->create();

        // Maker::factory()
        //     ->count(1)
        //     ->has(Model::factory()->count(3), 'carModels') //if the models name doesnt matched with the fucntion then we must provide it here
        //     ->has(Model::factory()->count(3))
        //     ->create();

        // Model::factory()
        //     ->count(5)
        //     ->forMaker(['name' => 'Lexus'])
        //     ->create();

        // Model::factory()
        //     ->count(5)
        //     ->for(Maker::factory()->state(['name' => 'Supraaaa']))
        //     ->create();


        // $maker = Maker::factory()->create();
        // Model::factory()
        //     ->count(5)
        //     ->for($maker)
        //     ->create();

        // User::factory()
        //     ->has(Car::factory()->count(5), 'favouriteCars')
        //     ->create();

        // return view('hello.welcome', [
        //     'first_name' => 'Mehedi',
        //     'last_name' => 'Hasan'
        // ]);









        //PRACTICE
        // $maker = Maker::factory()->make();
        // dump($maker);

        // $maker = Maker::factory()->count(10)->create();
        // dump($maker);

        // $users = User::factory()
        //     ->count(10)
        //     ->make(['name' => 'Hasan']);

        // dump($users);


        // $users = User::factory()
        //     ->count(10)
        //     ->state(['name' => 'Hasan'])
        //     ->make();
        // dump($users);

        // $users = User::factory()
        //     ->count(10)
        //     ->sequence(['name' => 'Hasan'], ['name' => 'Maha'])
        //     ->make();
        // dump($users);

        // $users = User::factory()
        //     ->count(10)
        //     ->sequence(fn(Sequence $sequence) => ['name' => 'Dummy Name ' . $sequence->index])
        //     ->make();
        // dump($users);

        // $users = User::factory()
        //     ->count(10)
        //     ->sequence(fn($sequence) => ['name' => 'Dummy Name ' . $sequence->index])
        //     ->make();
        // dump($users);


        // dump(
        //     User::factory()
        //         ->count(10)
        //         ->sequence(fn($sequence) => ['name' => 'Dummy Name ' . $sequence->index])
        //         ->make()
        // );0

        // dump(
        //     User::factory()
        //         ->unverified() //email will be null
        //         ->make()
        // );

        // dump(User::factory()
        //     ->aftermaking(function (user $user) {
        //         dump($user);
        //     })
        //     ->create());


        // dump(Maker::factory()
        //     ->count(5)
        //     ->hasModels(5)
        //     ->create());

        dump(Maker::factory()
            ->count(5)
            ->hasModels(1, ['name' => 'test'])
            ->create());










































        return "Hello World!";
        // return view("home.index");
    }

    public function checkAlert()
    {
        return view("challenge.alertKey");
    }
}
