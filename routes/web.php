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

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/add',function()
{
	return view('add');  // name of the blade file
});

Route::post('lawyersave-data',"RootController@add")->name('LawyersaveData');
Route::get('/Lawyershow','RootController@Lawyershow')->name('postdata');
//you can get id as the second param of method
Route::get('/ldelete/{id}','RootController@delete')->name('LdeletePost');
Route::get('/lawyerupdate/{id}','RootController@Lawyerupdate')->name('LawyerupdatePost');
Route::post('/lawyersave-Updated-data','RootController@lawyersaveUpdated')->name('LawyersaveUpdatedsPost');



Route::get('/areaadd',function()
{
	return view('areaadd');  // name of the blade file
});

Route::post('asave-data',"areaRootController@areaadd")->name('AsaveData');
Route::get('/areashow','areaRootController@areashow')->name('postdata');
//you can get id as the second param of method
Route::get('/adelete/{id}','areaRootController@delete')->name('AdeletePost');
Route::get('/areaUpdate/{id}','areaRootController@areaupdate')->name('AUpdatePost');
Route::post('/areasave-Updated-data','areaRootController@areasaveUpdated')->name('areasaveUpdatedsPost');



route::get('/casedetailsadd', function () 
{
	return view('casedetailsadd');//Name of the blade file
});

Route::post('casedetailssave-data',"casedetailsRootController@casedetailsadd")->name('casedetailssaveData');
Route::get('/casedetailsshow','casedetailsRootController@casedetailsshow');
Route::get('/casedetailsdelete/{id}','casedetailsRootController@casedetailsdelete')->name('casedetailsdeletePost');
Route::get('/casedetailsupdate/{id}','casedetailsRootController@casedetailsupdate')->name('casedetailsupdatePost');
Route::post('/casedetailsUpdatesave-data','casedetailsRootController@casedetailsUpdatesave')->name('casedetailsUpdatedsavePost');





Route::get('/cityadd',function()
{
	return view('cityadd');  // name of the blade file
});

Route::post('csave-data',"cityRootController@cityadd")->name('CsaveData');
Route::get('/cityshow','cityRootController@cityshow')->name('postdata');
//you can get id as the second param of method
Route::get('/cdelete/{id}','cityRootController@delete')->name('CdeletePost');
Route::get('/cityupdate/{id}','cityRootController@cityupdate')->name('CUpdatePost');
Route::post('/citysave-Updated-data','cityRootController@citysaveUpdated')->name('citysaveUpdatedsPost');





route::get('/Ruseradd', function () 
{
	return view('Ruseradd');//Name of the blade file
});

Route::post('rusersave-data',"ruserRootController@Ruseradd")->name('RusersaveData');
Route::get('/Rusershow','ruserRootController@Rusershow')->name('postdata');
//you can get id as the second param of method
Route::get('/Ruserdelete/{id}','ruserRootController@Ruserdelete')->name('RuserdeletePost');
Route::get('/Ruserupdate/{id}','ruserRootController@Ruserupdate')->name('RuserupdatePost');
Route::post('/Rusersave-Updated-data','ruserRootController@RusersaveUpdated')->name('RusersaveUpdatedsPost');