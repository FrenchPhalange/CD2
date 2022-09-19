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

Route::get('/', function () {
    return [
        "Marc",
        "Pierre",
        "Paul",
        "Jacques",
    ];
});

Route::get('{id}', function ($id) {
    return $id;
})->where(name: 'id', expression: '[0-9]+');


Route::view('/view', 'view');

Route::get('view/{n}', function ($n) {
    return view('view')->with
    ('numero', $n);
})->whereNumber('n');

Route::get('/', [DemoController::class,'index']);
Route::get('/users/{name}', [DemoController::class,'name'])->whereAlphanumeric('name')->name('name');