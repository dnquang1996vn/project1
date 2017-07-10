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
    return view('welcome');
});
Route::get('header',function(){
    return view('admin.detailMatch');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin
    


    //hidden match
Route::get('admin/hiddenMatch','Admin\HiddenMatchController@showHiddenMatch')->name('showHiddenMatch');    
Route::get('admin/hiddenMatch/create','Admin\HiddenMatchController@showCreateForm')->name('showCreateForm');
Route::post('admin/hiddenMatch/create','Admin\HiddenMatchController@createNewMatch');
Route::post('admin/hiddenMatch/delete','Admin\HiddenMatchController@deleteHiddenMatch'); 
Route::post('admin/hiddenMatch/public','Admin\HiddenMatchController@publicHiddenMatch'); 
Route::get('admin/hiddenMatch/{edit_id}/edit','Admin\HiddenMatchController@showEditForm')->name('showEditForm');
Route::post('admin/hiddenMatch/{edit_id}/edit','Admin\HiddenMatchController@editMatch')->name('editMatch');

	//public match
Route::get('admin/publicMatch','Admin\PublicMatchController@showPublicMatch')->name('showPublicMatch');
Route::get('admin/publicMatch/{id}/update',"Admin\PublicMatchController@showUpdateForm")->name('showUpdateForm');
Route::post('admin/publicMatch/{id}/update',"Admin\PublicMatchController@updateScore")->name('updateScore');
Route::post('admin/publicMatch/delete',"Admin\PublicMatchController@deletePublicMatch")->name('deletePublicMatch');



