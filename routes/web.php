<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('product', \App\Http\Controllers\ProductController::class);
Route::resource('product_category', \App\Http\Controllers\ProductCategoryController::class);

Route::get('/', function () {
    $users = \App\Models\User::all();
    return view('index', ['users' => $users]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/services', [\App\Http\Controllers\ServicesController::class, 'index']);
Route::get('/services/doctors', [\App\Http\Controllers\ServicesController::class, 'doctors']);
Route::get('/services/lawers', [\App\Http\Controllers\ServicesController::class, 'lawers']);
Route::get('/services/{id}', [\App\Http\Controllers\ServicesController::class, 'show']);

Route::get('/form', function () {
    $user = [];
    if(request()->userId) {
        $user = \App\Models\Product::find(request()->user_id);
    }
    return view('form', ['user' => $user]);
});

Auth::routes();

Route::resource('users', App\Http\Controllers\CandidateController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::get("/chat", [App\Http\Controllers\CandidateController::class, 'index']);

    Route::get("/chat/home", [App\Http\Controllers\CandidateController::class, 'home']);

    Route::get("/chat/home/{username}", [App\Http\Controllers\CandidateController::class, 'connect']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('product_category', App\Http\Controllers\ProductCategoryController::class);
});