<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::get('/', 'WelcomeController@welcome')->name('welcome');
Route::get('/booking', 'BookingController@booking')->name('booking');
Route::post('/availability', 'BookingController@availability')->name('availability');
// Route::post('/availability/list', 'BookingController@availability')->name('availability');


// Authentication Routes
Auth::routes();

// Registered and Activated User Routes
Route::group(['middleware' => ['auth']], function () {

    // Activation Routes
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');

    //  Dashboard Page
    Route::get('/dashboard', ['uses' => 'UserController@index'])->name('user.dashboard');
    Route::get('/home', ['uses' => 'UserController@index'])->name('public.home');
    Route::get('/profile', ['uses' => 'UserController@show'])->name('public.profile');
    Route::get('/profile/edit', ['uses' => 'UserController@edit'])->name('public.showProfile');
    Route::post('/profile/edit', ['uses' => 'UserController@update'])->name('public.updateProfile');
    Route::get('/profile-picture', ['uses' => 'UserController@getProfileUrl'])->name('public.profile-picture');

    // Reports
    Route::get('/reports', ['uses' => 'UserController@reports']);
});

Route::group(['middleware'=> ['auth', 'admin']], function () {

    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    // End users
});
