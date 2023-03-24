<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersController;
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

Route::get('/' , [StaticController::class, 'index'])->name('home.index');
Route::get('/about/about' , [StaticController::class, 'about'])->name('home.about');
Route::get('/contact' , [StaticController::class, 'contact'])->name('home.contact');
Route::resource('computer' , ComputersController::class);


// Route::get('/store/{category?}/{item?}', function ($category = null , $item = null)  {
//     if(isset($category)){
//         if(isset($item)){
//             return "<h1>{$item}</h1>";
//         }
//             return "<h1>{$category}</h1>";
//     }
//             return '{Store}';
// });

// Route::get('/store', function () {
//     $filter = request('style');
//     if(isset($filter)){
//         return 'Display of all <span style="color:red">' .strip_tags($filter). ' product </span>';
//     }else{
//         return 'All Products';
//     }
// });
