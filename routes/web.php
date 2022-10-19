<?php
use App\Http\Controllers\Admin\AdminLandlordController;
use App\Http\Controllers\Admin\AdminTenantController;
use App\Http\Controllers\Landlord\LandlordController;
use App\Http\Controllers\Landlord\landlordTenantController;
use App\Http\Controllers\TenantController;
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
Route::get('/dashboard', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/', function () {
    return view('tenant.land-pages.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('landlord', AdminLandlordController::class);
Route::resource('tenant', AdminTenantController::class);
Route::resource('landlord-tenant', landlordTenantController::class);
Route::get('/landlord-dashboard', [App\Http\Controllers\Landlord\LandlordController::class, 'index'])->name('landlord-dashboard');
Route::get('/tenant-dashboard', [App\Http\Controllers\TenantController::class, 'index'])->name('tenant-dashboard');
