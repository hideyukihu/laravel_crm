<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\InertiaTestController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use App\Models\InertiaTest;
use App\Models\Item;

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

/* inertiacontroller */

Route::get('/inertia-test', function () {
    return Inertia::render('InertiaTest');
});


Route::get('/component-test', function () {
    return Inertia::render('ComponentTest');
});

Route::get('/inertia/index', [InertiaTestController::class, 'index'])
    ->name('inertia.index');

Route::get('/inertia/show/{id}', [InertiaTestController::class, 'show'])
    ->name('inertia.show');

Route::post('/inertia', [InertiaTestController::class, 'store'])
    ->name('inertia.store');

Route::get('/inertia/create', [InertiaTestController::class, 'create'])
    ->name('inertia.create');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


/* InertiaController */
Route::delete('/inertia/{id}', [InertiaTestController::class, 'delete'])
    ->name('inertia.delete');


/* itemcontroller */
Route::resource('/items', ItemController::class)
    ->middleware(['auth', 'verified']);

/* CustomerController */
Route::resource('/customers', CustomerController::class)
    ->middleware(['auth', 'verified']);



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
