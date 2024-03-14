<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Test;
use Illuminate\Support\Facades\Redirect;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $active = 'welcome';
    return view('welcome')->with(compact('active'));
});


Route::get('/login',function(){ return view('login');})->name('login');
Route::post('/login',[UserController::class,'login']);


// Route::get('/home/{name?}',
//     function ($name = null)
//     {
//         $demo = "<h1>H1 tag testing</h1>";
//         $active = 'home';
//         $data = compact('name','demo','active');
//         return view('home')->with($data);
//     }
// );

// Route::get('/about',
//     function(){
//         $active = 'about';
//         return view('about')->with(compact('active'));
// });
// Route::view('/login','login');

// Route::get('/register',[RegisterController::class,'index']);
Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);