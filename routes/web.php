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

// namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\UserManagementController;

// use Symfony\Component\Routing\Route;

// Auth
// Route
Auth::routes();
 
Route::get('/', function () {
    if(Auth::guest())
        return view('auth/login');
    else
    return view('dashboard');
});
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index');


/*Aparments Routes*/
// Route::get('apartment-mgmt','ApartmentController@index');
Route::get('apartment-mgmt', [ApartmentController::class, 'index']);
Route::get('/apartment-mgmt/edit/{id}', ['as' => 'apartment-mgmt.edit', 'uses' => 'App\Http\Controllers\ApartmentController@edit']);
Route::post('/apartment-mgmt', ['as' => 'apartment-mgmt.store', 'uses' => 'App\Http\Controllers\ApartmentController@store']);
Route::get('/apartment-mgmt/create', ['as' => 'apartment-mgmt.create', 'uses' => 'App\Http\Controllers\ApartmentController@create']);
Route::get('/apartment-mgmt/show/{id}', ['as' => 'apartment-mgmt.show', 'uses' => 'App\Http\Controllers\ApartmentController@show']);
Route::delete('/apartment-mgmt/{id}', ['as' => 'apartment-mgmt.destroy', 'uses' => 'App\Http\Controllers\ApartmentController@destroy']);


//Owner Routes
Route::get('owner-information', 'App\Http\Controllers\OwnerInformatiionController@index');
Route::get('/owner-information/show/{id}', ['as' => 'owner-information.show', 'uses' => 'App\Http\Controllers\OwnerInformatiionController@show']);
Route::get('/owner-information/create', ['as' => 'owner-information.create', 'uses' => 'App\Http\Controllers\OwnerInformatiionController@create']);
Route::post('/owner-information', ['as' => 'owner-information.store', 'uses' => 'App\Http\Controllers\OwnerInformatiionController@store']);
Route::get('/owner-information/edit/{id}', ['as' => 'owner-information.edit', 'uses' => 'App\Http\Controllers\OwnerInformatiionController@edit']);
Route::post('/owner-information/{id}', ['as' => 'owner-information.update', 'uses' => 'App\Http\Controllers\OwnerInformatiionController@update']);
Route::delete('/owner-information/{id}', ['as' => 'owner-information.destroy', 'uses' => 'App\Http\Controllers\OwnerInformatiionController@destroy']);


/* Voter Routes*/
Route::get('voter-information', 'App\Http\Controllers\VoterInfoController@index');
Route::get('voter-information/create', ['as'=>'voter-information.create', 'uses'=>'App\Http\Controllers\VoterInfoController@create']);
Route::post('voter-information', ['as'=>'voter-information.store', 'uses'=>'App\Http\Controllers\VoterInfoController@store']);
Route::get('/voter-information/show/{id}', ['as' => 'voter-information.show', 'uses' => 'App\Http\Controllers\VoterInfoController@show']);
Route::get('/voter-information/edit/{id}', ['as' => 'voter-information.edit', 'uses' => 'App\Http\Controllers\VoterInfoController@edit']);
Route::post('/voter-information/{id}', ['as' => 'voter-information.update', 'uses' => 'App\Http\Controllers\VoterInfoController@update']);
Route::delete('/voter-information/{id}', ['as' => 'voter-information.destroy', 'uses' => 'App\Http\Controllers\VoterInfoController@destroy']);




/*Managing Committee Routes*/
Route::get('managingcommittee','App\Http\Controllers\CommitteeController@index');
Route::get('managingcommittee/create', ['as' => 'managingcommittee.create',  'uses' => 'App\Http\Controllers\CommitteeController@create']);
Route::post('managingcommittee', ['as' => 'managingcommittee.store',  'uses' => 'App\Http\Controllers\CommitteeController@store']);
Route::delete('managingcommittee/{id}', ['as' => 'managingcommittee.destroy',  'uses' => 'App\Http\Controllers\CommitteeController@destroy']);

//Bill Management Routes
Route::get('billmanagement','App\Http\Controllers\BillController@index');
Route::get('/billmanagement/create', ['as' => 'billmanagement.create', 'uses' => 'App\Http\Controllers\BillController@create']);
Route::get('/billmanagement/monthlybill', ['as' => 'billmanagement.monthlybill', 'uses' => 'App\Http\Controllers\BillController@monthlybill']);
Route::get('/billmanagement/pdf/{id}', ['as' => 'billmanagement.pdf', 'uses' => 'App\Http\Controllers\BillController@downloadPDF']);
//Route::get('/billmanagement/pdf/{id}', ['as' => 'billmanagement.pdf', 'uses' => 'App\Http\Controllers\BillController@pdf']);
Route::post('/billmanagement', ['as' => 'billmanagement.store', 'uses' => 'App\Http\Controllers\BillController@store']);
Route::delete('/billmanagement/{id}', ['as' => 'billmanagement.destroy', 'uses' => 'App\Http\Controllers\BillController@destroy']);

//Route::get('/billmanagement/pdf', ['as' => 'billmanagement.pdf', 'uses' => 'App\Http\Controllers\BillController@pdf']);
//Route::resource('rentals', 'RentalController');

//Expences Routes
Route::get('expences', 'App\Http\Controllers\ExpenceController@index');
Route::get('expences/create', ['as' => 'expences.create', 'uses' => 'App\Http\Controllers\ExpenceController@create']);
Route::get('/expences/pdf/{id}', ['as' => 'expences.pdf', 'uses' => 'App\Http\Controllers\ExpenceController@downloadPDF']);
Route::post('expences', ['as' => 'expences.store', 'uses' => 'App\Http\Controllers\ExpenceController@store']);
Route::delete('/expences/{id}', ['as' => 'expences.destroy', 'uses' => 'App\Http\Controllers\ExpenceController@destroy']);


//Notice Board Routes
Route::get('notice', 'App\Http\Controllers\NoticeController@index');
Route::get('notice/addnotice',['as'=> 'notice.addnotice', 'uses'=>'App\Http\Controllers\NoticeController@addnotice']);
Route::post('notice', ['as'=> 'notice.store', 'uses'=>'App\Http\Controllers\NoticeController@store']);
Route::get('notice/{id}', ['as' => 'notice.download', 'uses' => 'App\Http\Controllers\NoticeController@download']);
 
Route::get('reports', 'App\Http\Controllers\ReportsController@index'); 
Route::any('reports/search', ['as' =>'reports.search', 'uses' => 'App\Http\Controllers\ReportsController@search']);

 
Route::get('/profile', 'ProfileController@index');
Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
// Route::resource('user-management', UserManagementController::class);
Route::get('user-management', 'App\Http\Controllers\UserManagementController@index');
Route::get('user-management/create', 'App\Http\Controllers\UserManagementController@create')->name('user-management.create');
Route::get('user-management/destroy/{id}', 'App\Http\Controllers\UserManagementController@destroy')->name('user-management.destroy');
Route::get('user-management/edit/{id}', 'App\Http\Controllers\UserManagementController@edit')->name('user-management.edit');
Route::post('user-management/update/{id}', 'App\Http\Controllers\UserManagementController@update')->name('user-management.update');
Route::resource('employee-management', 'App\Http\Controllers\EmployeeManagementController');
Route::get('employee-management/show/{id}',['as'=>'employee-management.show', 'uses'=>'App\Http\Controllers\EmployeeManagementController@show']);
Route::get('employee-management/destroy/{id}',['as'=>'employee-management.destroy', 'uses'=>'App\Http\Controllers\EmployeeManagementController@destroy']);
Route::get('employee-management/edit/{id}',['as'=>'employee-management.edit', 'uses'=>'App\Http\Controllers\EmployeeManagementController@edit']);
Route::post('employee-management/search', 'App\Http\Controllers\EmployeeManagementController@search')->name('employee-management.search');




Route::resource('system-management/department', 'App\Http\Controllers\DepartmentController');
Route::post('system-management/department/search', 'App\Http\Controllers\DepartmentController@search')->name('department.search');
Route::resource('system-management/division', 'App\Http\Controllers\DivisionController');
Route::post('system-management/division/search', 'App\Http\Controllers\DivisionController@search')->name('division.search');
Route::resource('system-management/country', 'App\Http\Controllers\CountryController');
Route::post('system-management/country/search', 'App\Http\Controllers\CountryController@search')->name('country.search');
Route::resource('system-management/state', 'App\Http\Controllers\StateController');
Route::post('system-management/state/search', 'App\Http\Controllers\StateController@search')->name('state.search');
Route::resource('system-management/city', 'App\Http\Controllers\CityController');
Route::post('system-management/city/search', 'App\Http\Controllers\CityController@search')->name('city.search');
Route::get('avatars/{name}', 'App\Http\Controllers\EmployeeManagementController@load');
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
