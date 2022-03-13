<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

//Route::middleware('web', 'auth')->group(function() {

    /*
    |--------------------------------------------------------------------------
    | Datatables Routes
    |--------------------------------------------------------------------------
    |
    | Contains an Array to define Controllers which will implement datatables() action
    |
    */

    /*$withDatatables = [
        ['prefix' => 'vehicles', 'as' => 'vehicles.', 'controller' => VehicleController::class],
        ['prefix' => 'vehicle-types', 'as' => 'vehicle-types.', 'controller' => VehicleTypeController::class],
        ['prefix' => 'event-types', 'as' => 'event-types.', 'controller' => EventTypeController::class],
        ['prefix' => 'event-locations', 'as' => 'event-locations.', 'controller' => EventLocationController::class],
        ['prefix' => 'events', 'as' => 'events.', 'controller' => EventController::class],
        ['prefix' => 'users', 'as' => 'users.', 'controller' => UserController::class],
        ['prefix' => 'cashier', 'as' => 'cashier.', 'controller' => CashierController::class],
        ['prefix' => 'customers', 'as' => 'customers.', 'controller' => CustomerController::class],
        ['prefix' => 'products', 'as' => 'products.', 'controller' => ProductController::class],
        ['prefix' => 'ticket-types', 'as' => 'ticket-types.', 'controller' => TicketTypeController::class],
        ['prefix' => 'product-combos', 'as' => 'product-combos.', 'controller' => ComboController::class],
        ['prefix' => 'tiers', 'as' => 'tiers.', 'controller' => TierController::class],
        ['prefix' => 'product-events', 'as' => 'product-events.', 'controller' => ProductEventController::class],
    ];*/

    /*foreach($withDatatables as $subject)
    {
        Route::group([
            'prefix' => $subject['prefix'],
            'as' => $subject['as']
        ], function () use ($subject) {
            Route::get('datatables', [$subject['controller'], 'datatables'])->name('datatables');
        });
    }*/

    /*
    |--------------------------------------------------------------------------
    | Toggle Status Routes
    |--------------------------------------------------------------------------
    |
    | Contains an Array to define Controllers which will implement toggleStatus() action
    |
    */

    /*$withToggleStatus = [
        ['prefix' => 'event-types', 'as' => 'event-types.', 'controller' => EventTypeController::class],
        ['prefix' => 'event-locations', 'as' => 'event-locations.', 'controller' => EventLocationController::class],
        ['prefix' => 'events', 'as' => 'events.', 'controller' => EventController::class],
        ['prefix' => 'cashier', 'as' => 'cashier.', 'controller' => CashierController::class],
        ['prefix' => 'customers', 'as' => 'customers.', 'controller' => CustomerController::class],
        ['prefix' => 'products', 'as' => 'products.', 'controller' => ProductController::class],
        ['prefix' => 'product-combos', 'as' => 'product-combos.', 'controller' => ComboController::class],
        ['prefix' => 'product-events', 'as' => 'product-events.', 'controller' => ProductEventController::class],
    ];

    foreach($withToggleStatus as $subject)
    {
        Route::group([
            'prefix' => $subject['prefix'],
            'as' => $subject['as']
        ], function () use ($subject) {
            Route::get('toggle-status/{id}/{status}', [$subject['controller'], 'toggleStatus'])->name('toggle-status');
        });
    }*/

    /*
    |--------------------------------------------------------------------------
    | Resource Routes
    |--------------------------------------------------------------------------
    |
    | Basically all controllers which have CRUDs.
    |
    */
    /*
    Route::resources([
        'vehicle-types' => VehicleTypeController::class,
        'vehicles' => VehicleController::class,
        'event-types' => EventTypeController::class,
        'event-locations' => EventLocationController::class,
        'events' => EventController::class,
        'cashier' => CashierController::class,
        'customers' => CustomerController::class,
        'products' => ProductController::class,
        'product-combos' => ComboController::class,
        'ticket-types' => TicketTypeController::class,
        'tiers' => TierController::class,
        'product-events' => ProductEventController::class,
    ]);*/

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');

//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
