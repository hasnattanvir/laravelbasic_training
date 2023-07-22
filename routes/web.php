<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/admin', function () {
//     return view('admins.test.index');
// });



Route::get('/', function () {
    return view('welcome');
});
// name route
Route::get('/user/profile',function(){
    return view('admins.test.index');
})->name('showprofile');


// groups route
// Route::group(["prefix"=>"/student"],function(){
//     Route::get('/create',[StudentController::class,'create']);
//     Route::get('/update/{id}',[StudentController::class,'update']);
//     Route::get('/delete/{id}',[StudentController::class,'delete']);
//     Route::get('/show',[StudentController::class,'show']);

// });
// Route::prefix('student')->group(function(){
//     Route::get('/create',[StudentController::class,'create'])->name('crt');
//     Route::get('/update/{id}',[StudentController::class,'update']);
//     Route::get('/delete/{id}',[StudentController::class,'delete']);
//     Route::get('/show',[StudentController::class,'show']);
// });


Route::prefix('student')
    ->name('user.')
    ->controller(StudentController::class)
    ->group(function(){
        Route::get('/create','create')->name('create');
        Route::post('/insert','insert')->name('insert');
        Route::get('/update/{id}','update')->name('up');
        Route::delete('/datadelete/{id}','deletedata');
        Route::get('/show','show')->name('show');
});







// required parameters
// Route::get('/contact/{name}', function (Request $test) {
//     echo $test->name;
// });

// 2) Optional Parameters
// Route::get('/contact/{address}/{name?}', function ($address,$name=null) {
//     echo 'name:'.$name;
//     echo '<br>';
//     echo 'address:'.$address;
// });

// Regular Expression Constraints
// Route::get('/contact/{mobile}', function ($phone) {
//     echo $phone;
// })->where('mobile',"[+][0-9]+");

// Route::get('/contact/{mobile}', function ($phone) {
//         echo $phone;
//     })->whereNumber('mobile');

// Global Constraints
// Route::get('/phone/{phone}',function($phone){
//     echo $phone;
// });



//route parameter
// 1) Required Parameters
// 2) Optional Parameters
// 3) Regular Expression Constraints
// 4) Global Constraints





//available router methods
// Route::post($uri,$calllback);
// Route::put($uri,$calllback);
// Route::patch($uri,$calllback);
// Route::delete($uri,$calllback);
// Route::options($uri,$calllback);


// Encoded Forward Slashes

// Route::get('/test/{name}', function ($name) {
//     echo $name;
// })->where('name','.*');


//name route

Route::get('/test/show/profile', function () {
    echo "This is your profle";
})->name('profile');
