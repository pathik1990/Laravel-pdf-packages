<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        $user = Auth::user();
        if ( $user->hasRole('developer') ) {
            return redirect()->intended('developer');
        }

        // allow admin to proceed with request
        else if ( $user->hasRole('admin') ) {
            return redirect()->intended('admin');
        }

        return redirect()->intended('login');
    });
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'developer'], 'prefix' => 'developer'], function () {
    Route::get('/', [App\Http\Controllers\Developer\DashboardController::class, 'index'])->name('developer_dashboard');

    //API Keys or Projects
    Route::get('/api-keys', [App\Http\Controllers\Developer\ApiKeysController::class, 'index'])->name('api-keys');
    Route::get('/new-project', [App\Http\Controllers\Developer\ApiKeysController::class, 'create'])->name('new-project');
    Route::post('/add-project', [App\Http\Controllers\Developer\ApiKeysController::class, 'store'])->name('add-project');
    Route::get('/edit-project/{id}', [App\Http\Controllers\Developer\ApiKeysController::class, 'edit'])->name('edit-project');
    Route::post('/update-project/{id}', [App\Http\Controllers\Developer\ApiKeysController::class, 'update'])->name('update-project');
    Route::get('/delete-project/{id}', [App\Http\Controllers\Developer\ApiKeysController::class, 'destroy'])->name('delete-project');

    //Profiles
    Route::get('/profile', [App\Http\Controllers\Developer\ProfileController::class, 'index'])->name('profile');

    //Business Details
    Route::get('/business-details', [App\Http\Controllers\Developer\BusinessDetailsController::class, 'index'])->name('business-details');
    Route::post('/update-business-details/{id}', [App\Http\Controllers\Developer\BusinessDetailsController::class, 'update'])->name('update-business-details');

    //Plans & Packages
    Route::get('/plans', [App\Http\Controllers\Developer\PlansAndPackagesController::class, 'index'])->name('plans');

    // PayPal Payments
    Route::get('create-transaction', [App\Http\Controllers\Developer\PayPalPaymentController::class, 'createTransaction'])->name('createTransaction');
    Route::get('process-transaction', [App\Http\Controllers\Developer\PayPalPaymentController::class, 'processTransaction'])->name('processTransaction');
    Route::get('success-transaction', [App\Http\Controllers\Developer\PayPalPaymentController::class, 'successTransaction'])->name('successTransaction');
    Route::get('cancel-transaction', [App\Http\Controllers\Developer\PayPalPaymentController::class, 'cancelTransaction'])->name('cancelTransaction');

    //Transaction / orders
    Route::get('orders', [App\Http\Controllers\Developer\UserOrdersDetails::class, 'index'])->name('orders');
    Route::post('/view-your-orders/{id}', [App\Http\Controllers\Developer\UserOrdersDetails::class, 'show'])->name('view-your-orders');

});

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin_dashboard');

    //User Listing
    Route::get('all-users', [App\Http\Controllers\Admin\UserListsController::class, 'index'])->name('all-users');

    //Business Details
    Route::get('all-business-details', [App\Http\Controllers\Admin\UsersBusinessDetails::class, 'index'])->name('all-business-details');

    //Transaction / orders
    Route::get('all-orders', [App\Http\Controllers\Admin\UserOrdersDetails::class, 'index'])->name('all-orders');
    Route::post('/view-orders/{id}', [App\Http\Controllers\Admin\UserOrdersDetails::class, 'show'])->name('view-orders');
    Route::post('/download-invoice/{id}', [App\Http\Controllers\Admin\UserOrdersDetails::class, 'invoiceDownload'])->name('download-invoice');

    //Plans / Packages
    Route::get('all-plans-packages', [App\Http\Controllers\Admin\PlansPackagesDetails::class, 'index'])->name('all-plans-packages');
    Route::post('/plans-packages-view/{id}', [App\Http\Controllers\Admin\PlansPackagesDetails::class, 'show'])->name('plans-packages-view');


    //PayPal Setting
    Route::get('/paypal-details', [App\Http\Controllers\Admin\PayPalDetailsController::class, 'index'])->name('paypal-details');
    Route::post('/update-paypal-details/{id}', [App\Http\Controllers\Admin\PayPalDetailsController::class, 'update'])->name('update-paypal-details');

    Route::post('/mark-as-read', [App\Http\Controllers\Admin\DashboardController::class, 'markNotification'])->name('markNotification');

});

// Logout for all users
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
});