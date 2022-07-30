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

use App\Http\Controllers\ApartmentController;
// use Symfony\Component\Routing\Route;

Auth::routes();
 
Route::get('/', function () {
    if(Auth::guest())
        return view('auth/login');
    else
    return view('dashboard');
});
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/dashboard', 'DashboardController@index');


/*Aparments Routes*/
// Route::get('apartment-mgmt','ApartmentController@index');
Route::get('apartment-mgmt', [ApartmentController::class, 'index']);
Route::get('/apartment-mgmt/edit/{id}', ['as' => 'apartment-mgmt.edit', 'uses' => 'ApartmentController@edit']);
Route::post('/apartment-mgmt', ['as' => 'apartment-mgmt.store', 'uses' => 'ApartmentController@store']);
Route::get('/apartment-mgmt/create', ['as' => 'apartment-mgmt.create', 'uses' => 'ApartmentController@create']);
Route::get('/apartment-mgmt/show/{id}', ['as' => 'apartment-mgmt.show', 'uses' => 'ApartmentController@show']);
Route::delete('/apartment-mgmt/{id}', ['as' => 'apartment-mgmt.destroy', 'uses' => 'ApartmentController@destroy']);


//Owner Routes
Route::get('owner-information', 'OwnerInformatiionController@index');
Route::get('/owner-information/show/{id}', ['as' => 'owner-information.show', 'uses' => 'OwnerInformatiionController@show']);
Route::get('/owner-information/create', ['as' => 'owner-information.create', 'uses' => 'OwnerInformatiionController@create']);
Route::post('/owner-information', ['as' => 'owner-information.store', 'uses' => 'OwnerInformatiionController@store']);
Route::get('/owner-information/edit/{id}', ['as' => 'owner-information.edit', 'uses' => 'OwnerInformatiionController@edit']);
Route::post('/owner-information/{id}', ['as' => 'owner-information.update', 'uses' => 'OwnerInformatiionController@update']);
Route::delete('/owner-information/{id}', ['as' => 'owner-information.destroy', 'uses' => 'OwnerInformatiionController@destroy']);


/* Voter Routes*/
Route::get('voter-information', 'VoterInfoController@index');
Route::get('voter-information/create', ['as'=>'voter-information.create', 'uses'=>'VoterInfoController@create']);
Route::post('voter-information', ['as'=>'voter-information.store', 'uses'=>'VoterInfoController@store']);
Route::get('/voter-information/show/{id}', ['as' => 'voter-information.show', 'uses' => 'VoterInfoController@show']);
Route::get('/voter-information/edit/{id}', ['as' => 'voter-information.edit', 'uses' => 'VoterInfoController@edit']);
Route::post('/voter-information/{id}', ['as' => 'voter-information.update', 'uses' => 'VoterInfoController@update']);
Route::delete('/voter-information/{id}', ['as' => 'voter-information.destroy', 'uses' => 'VoterInfoController@destroy']);




/*Managing Committee Routes*/
Route::get('managingcommittee','CommitteeController@index');
Route::get('managingcommittee/create', ['as' => 'managingcommittee.create',  'uses' => 'CommitteeController@create']);
Route::post('managingcommittee', ['as' => 'managingcommittee.store',  'uses' => 'CommitteeController@store']);
Route::delete('managingcommittee/{id}', ['as' => 'managingcommittee.destroy',  'uses' => 'CommitteeController@destroy']);

//Bill Management Routes
Route::get('billmanagement','BillController@index');
Route::get('/billmanagement/create', ['as' => 'billmanagement.create', 'uses' => 'BillController@create']);
Route::get('/billmanagement/monthlybill', ['as' => 'billmanagement.monthlybill', 'uses' => 'BillController@monthlybill']);
Route::get('/billmanagement/pdf/{id}', ['as' => 'billmanagement.pdf', 'uses' => 'BillController@downloadPDF']);
//Route::get('/billmanagement/pdf/{id}', ['as' => 'billmanagement.pdf', 'uses' => 'BillController@pdf']);
Route::post('/billmanagement', ['as' => 'billmanagement.store', 'uses' => 'BillController@store']);
Route::delete('/billmanagement/{id}', ['as' => 'billmanagement.destroy', 'uses' => 'BillController@destroy']);

//Route::get('/billmanagement/pdf', ['as' => 'billmanagement.pdf', 'uses' => 'BillController@pdf']);
//Route::resource('rentals', 'RentalController');

//Expences Routes
Route::get('expences', 'ExpenceController@index');
Route::get('expences/create', ['as' => 'expences.create', 'uses' => 'ExpenceController@create']);
Route::get('/expences/pdf/{id}', ['as' => 'expences.pdf', 'uses' => 'ExpenceController@downloadPDF']);
Route::post('expences', ['as' => 'expences.store', 'uses' => 'ExpenceController@store']);
Route::delete('/expences/{id}', ['as' => 'expences.destroy', 'uses' => 'ExpenceController@destroy']);


//Notice Board Routes
Route::get('notice', 'NoticeController@index');
Route::get('notice/addnotice',['as'=> 'notice.addnotice', 'uses'=>'NoticeController@addnotice']);
Route::post('notice', ['as'=> 'notice.store', 'uses'=>'NoticeController@store']);
Route::get('notice/{id}', ['as' => 'notice.download', 'uses' => 'NoticeController@download']);
 
Route::get('reports', 'ReportsController@index'); 
Route::any('reports/search', ['as' =>'reports.search', 'uses' => 'ReportsController@search']);

 
Route::get('/profile', 'ProfileController@index');
Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');
Route::resource('employee-management', 'EmployeeManagementController');
Route::get('employee-management/show/{id}',['as'=>'employee-management.show', 'uses'=>'EmployeeManagementController@show']);
Route::post('employee-management/search', 'EmployeeManagementController@search')->name('employee-management.search');




Route::resource('system-management/department', 'DepartmentController');
Route::post('system-management/department/search', 'DepartmentController@search')->name('department.search');
Route::resource('system-management/division', 'DivisionController');
Route::post('system-management/division/search', 'DivisionController@search')->name('division.search');
Route::resource('system-management/country', 'CountryController');
Route::post('system-management/country/search', 'CountryController@search')->name('country.search');
Route::resource('system-management/state', 'StateController');
Route::post('system-management/state/search', 'StateController@search')->name('state.search');
Route::resource('system-management/city', 'CityController');
Route::post('system-management/city/search', 'CityController@search')->name('city.search');
Route::get('avatars/{name}', 'EmployeeManagementController@load');
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
