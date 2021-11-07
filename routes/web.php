<?php

use Illuminate\Support\Facades\Route;

use App\Models\Jenis;
use App\Models\Merk;

use App\Http\Controllers\JenisResourceController;
use App\Http\Controllers\MerkResourceController;

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
    return view('home', [
        "title" => "Home",
        "pagetitle" => "WELCOME TO MY WEBSITE"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "myname" => "Jeffrey",
        "email" => "jverdianto@student.ciputra.ac.id",
        "line" => "poseidon_55"
    ]);
});

Route::resource('merk', MerkResourceController::class);
Route::resource('jenis', JenisResourceController::class);
