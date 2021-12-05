<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\JoinUsComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\ThankyouComponent;
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

Route::get('/', HomeComponent::class);
Route::get('/about', AboutComponent::class);
Route::get('/joinus', JoinUsComponent::class);
Route::get('/contact', ContactComponent::class);
Route::get('/shop', ShopComponent::class);
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/product/{slug}', DetailComponent::class)->name('product.details');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/thankyou', ThankyouComponent::class)->name('thankyou');

// For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashoard', UserDashboardComponent::class)->name('user.dashboard');
});

// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
