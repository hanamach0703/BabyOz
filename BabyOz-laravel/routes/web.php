<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\JoinUsComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ShopComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', HomeComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/joinus', JoinUsComponent::class);
Route::get('/contact', ContactComponent::class);
Route::get('/shop', ShopComponent::class);