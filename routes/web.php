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
*/

Route::get('/', 'HomeController@listAllHouses');

Route::get('/home', 'HomeController@listAllHouses')->name('home');

Route::get('/login', 'UserController@showLogin');
Route::post('/login-verify', 'UserController@verifyLogin');
Route::get('/register', 'UserController@showRegister');
Route::post('/registration', 'UserController@registration');

Route::get('/users', 'UserController@index');

Route::group(['middleware' => 'adminVerify'], function (){

    Route::get('/admin','AdminController@index');
    Route::get('/admin/admin-list','AdminController@adminList');
    Route::get('/admin/add-admin','AdminController@addAdminForm');
    Route::post('/admin/add-new-admin','AdminController@addAdmin');
    Route::get('/admin/admin-request-list','AdminController@AdminRequestTable');
    Route::get('/admin/change-status/{id}','AdminController@changeStatus');
    Route::get('/admin/delete/{id}','AdminController@destroy');

    Route::get('/admin/profile/edit/{id}','AdminController@profile');
    Route::post('/admin/profile/update','AdminController@updateProfile');

    Route::get('/admin/user-list','AdminController@userListTable');
    Route::post('/admin/user/profile/update','AdminController@updateUser');
    Route::get('/admin/users/profile/edit/{id}','AdminController@editUser');
    Route::get('/admin/users/change-status/{id}','AdminController@changeStatusUser');
    Route::get('/admin/users/delete/{id}','AdminController@deleteUser');


    Route::get('/admin/house-landed-list','LandingHouseController@houseLandendList');
    Route::get('/admin/landing-house/edit/{id}','LandingHouseController@editHouseLanding');
    Route::get('/admin/add-house-landing','LandingHouseController@addHouseLanding');
    Route::post('/admin/store-house-landing','LandingHouseController@storeHouseLanding');
    Route::post('/admin/update-house-landing','LandingHouseController@updateHouseLanding');

    Route::get('/admin/leads','LeadsController@leadsHouses');
    Route::get('/admin/leads-house/{street}/{id}','LeadsController@singleLeadsHouse');
    Route::get('/admin/leads/edit/{id}','LeadsController@editLeadsHouse');
    Route::post('/admin/leads/update','LeadsController@updateLeadsHouse');
    Route::get('/admin/house/delete/{id}','LandingHouseController@destroy');
    Route::get('/admin/leads/delete/{id}','LeadsController@destroy');

});

Route::group(['middleware' => 'loginVerify'], function (){

    Route::get('/admin/login','AdminController@showLoginForm');
    Route::post('/admin/login-verify','AdminController@login');

    Route::get('/admin/register','AdminController@showRegForm');
    Route::post('/admin/registration','AdminController@registration');

});

Route::get('/log-out','AdminController@logOut');

Route::get('/landing-house/{street}/{id}','HomeController@singleHouse');
Route::post('/landing-house/leads/{street}/{id}','LeadsController@addLeadsHouse');

