<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ModernController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\ElectricController;
use App\Http\Controllers\ElectronicController;

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
define('PAGINATION_COUNT', 8);
Route::get('/', [StaticController::class, 'index']) -> name('home.index');
Route::get('/call', [StaticController::class, 'call']) -> name('home.call');
Route::get('/search', [StaticController::class, 'search']) -> name('home.search');
Route::resource('electrics', ElectricController::class);
Route::resource('electronics', ElectronicController::class);
Route::resource('houses', HouseController::class);
Route::resource('medicals', MedicalController::class);
Route::resource('moderns', ModernController::class);
// Route::post('/electronics', [ElectronicController::class, 'show']);
// Route::get('/search', [HouseController::class, 'search']) -> name('houses.search');


Route::get('/test', function () {

    clear_cart();


    add_product_to_cart(3, 15);






    return get_cart();

    
    $user = User::first();
    // $user->wallet->deposit(100);
    if($user->wallet->canWithdraw(90)){
        $user->wallet->withdraw(90);
        return "done";

    }else{
        return "no balance";
    }

    return $user->wallet->balance;
});
Route::get('/hash', function () {
    return bcrypt('admin');
});

