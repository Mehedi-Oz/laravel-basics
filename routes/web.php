<?php

use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowCarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $practiceUrl = route('practice.view', ['keyF' => 'first', 'keyL' => 100]);
    dd($practiceUrl);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product/{id}', function (string $id) {
    return "product id=$id";
});

/*optional parameter*/

Route::get('/product/{category?}', function (string $category = null) {
    return "product for category=$category";
});

/*parameter must be number*/

Route::get('/product/{id}', function (string $id) {
    return "Checking for number!! Works, Number: $id";
})->whereNumber('id');

/*parameter must be letters*/

Route::get('/letter/{let}', function (string $let) {
    return "Checking for only letters!! works, letter: $let";
})->whereAlpha("let");

/*parameter containing both letters & numbers or only letters or numbers*/
Route::get("/alphanumeric/{alphanum}", function (string $alphanum) {
    return "Checking for both letters & numbers!! works, $alphanum";
})->whereAlphaNumeric('alphanum');

/*parameter containing specific keywords*/
Route::get('/specific/{keywords}', function (string $keyword) {
    return "Checking for specific keywords!! Works, $keyword";
})->whereIn("keywords", ["abc", "def", "ghi"]);

/*REGEX*/

/*parameter containing only lowercase letters*/
Route::get('/checklower/{keyword}', function (string $keyword) {
    return "Checking for lower-case!! Works, $keyword";
})->where('keyword', '[a-z]+');

/*parameter containing only uppercase letters*/
Route::get('/checkupper/{keyword}', function (string $keyword) {
    return "Checking for upper-case!! Works, $keyword";
})->where('keyword', '[A-Z]+');

Route::get('/{lang}/product/{id}', function (string $lang, string $id) {
    return "Language: $lang. Product id: $id";
})->where(['lang' => '[a-z]{2}', 'id' => '\d{4,}']);

/*parameter containing special characters*/
Route::get('/search/{keyword}', function (string $keyword) {
    return "Check: $keyword";
})->where('keyword', '.+');

/*named routes*/

Route::get('/{keyF}/practice/{keyL}', function (string $keyF, $keyL) {

})->name("practice.view");

/*redirecting routes*/
Route::get('/user/profile', function () { })->name('profile');

Route::get('/current-user', function () {

    return redirect()->route('profile');

    //alternative
    //return to_route('profile');

});

/*grouping routes*/
Route::prefix('/admin')->group(function () {
    route::get('/users', function () {
        return '/admin/users';
    });
});

Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        return 'users';
    })->name('users');
});

/*fallback routes*/
Route::fallback((function () {
    return 'fallback';
}));

/*adding 2 nums from router*/
// Route::get('/sumNum/{numOne}/{numTwo}', function (string $numOne, string $numTwo) {
//     return "$numOne + $numTwo = " . ($numOne + $numTwo);
// })->where(['numOne' => '\d+', 'numTwo' => '\d+']);

Route::get('/sumNum/{numOne}/{numTwo}', function (string $numOne, string $numTwo) {
    return "$numOne + $numTwo = " . ($numOne + $numTwo);
})->whereNumber(['numOne', 'numTwo']);







/*controller*/
Route::get('/car', [CarController::class, 'index']);

Route::controller(CarController::class)->group(function () {
    Route::get('/car', 'index');
    Route::get('/car-tire', 'carTire');
    Route::get('/car-window', 'carWindow');
});

/*single-action controller (__invokable) - controllers that serves only one purpose/task*/
Route::get('/showcar/invokable', CarController::class);
Route::get('/showcar', [CarController::class, 'index']);

Route::get('/upload-data', ShowCarController::class);

//Route::resource('/products', ProductController::class);

//excludes selected methods
// Route::resource('/products', ProductController::class)->except(['index', 'destroy']);

//shows only selected methods
//Route::resource('/products', ProductController::class)->only(['index', 'destroy']);

// Route::resource('/products', ProductController::class);

// Route::apiResource('/product-api', ApiProductController::class);

Route::apiResources([
    'cars-api' => ProductController::class,
    'products-api' => ApiProductController::class,
]);

/*adding 2 nums and subtracting 2 nums from router with controller*/
//this solution works but will give error when string in given as input
Route::get('/sum/{num1}/{num2}', [CalculatorController::class, 'sum']);
Route::get('/subtract/{num1}/{num2}', [CalculatorController::class, 'subtract']);

//this solution works too but will forward to fallback when a string in given as input
Route::get('/sum/{num1}/{num2}', [CalculatorController::class, 'sum'])->whereNumber(['num1', 'num2']);
Route::get('/subtract/{num1}/{num2}', [CalculatorController::class, 'subtract'])->whereNumber(['num1', 'num2']);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/hello', [HelloController::class, 'welcome'])->name('hello');

Route::get('/alert', [HomeController::class, 'checkAlert'])->name('alertKey');