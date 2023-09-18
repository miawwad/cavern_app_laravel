<?php

use App\Http\Controllers\CavernController; 
use App\Http\Controllers\OrderController;
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

Route::get('login', function () {
    $returnURL = Session::get('returnURL', Request::url().'/../');

    return RCAuth::redirectToLogin($returnURL);
});

Route::get('logout', function () {
    RCAuth::logout();
    $returnURL = Request::url().'/../';

    return RCAuth::redirectToLogout($returnURL);
});

Route::middleware('force_login')->group(function () {
    Route::get('/', [CavernController::class, 'index']);
    
    Route::get('/order',[OrderController::class, 'order']);
});

Route::post('/order/store', [OrderController::class, 'storeOrder']); 