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




Route::get('/admin', function () {
    return 'welcome';
});

Route ::namespace('Front')->group(function(){

    Route::get('user','UserController@showAdminName');
});

// Route:: prefix('users')-> group(function(){

//     Route:: get('showing','UserController@showAdminName');
//     Route:: get('delete','UserController@showAdminName');
//     Route:: get('put','UserController@showAdminName');
//     Route:: get('edit','UserController@showAdminName');
// });
Route :: group (['prefix' => 'users','namespace' => 'Front'], function(){


    Route :: get('/alobeidi',function(){
        return 'alobeidi';
    });


    Route:: get('delete','UserController@showAdminName');
    Route:: get('put','UserController@showAdminName');
    Route:: get('edit','UserController@showAdminName');
});

Route:: group(['namespace' => 'Admin'],function(){

    Route:: get('first','FirstController@first') -> middleware('auth');
    Route:: get('first1','FirstController@first1');
    Route:: get('first2','FirstController@first2');
    Route:: get('first3','FirstController@first3');
});




Route:: get('landing','Front\UserController@landing');
