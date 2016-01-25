<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

        //restful routes for Listing
    Route::group(['prefix'=>'list'], function(){
        Route::get('/',          ['as'=>'viewlist',          'uses'=>'ListController@index'] );
        Route::get('create',     ['as'=>'createlist',        'uses'=>'ListController@create']);
        Route::get('{id}',       ['as'=>'showlist',          'uses'=>'listController@show']);
        Route::post('store',     ['as'=>'storelist',         'uses'=>'ListController@store']);
        Route::get('{id}/edit',  ['as'=>'editlist',          'uses'=>'ListController@edit']);
        Route::put('{id}',       ['as'=>'updatelist',        'uses'=>'ListController@update']);
        Route::delete('{id}/delete',    ['as'=>'deletelist',        'uses'=>'ListController@destroy']);


     Route::group(['prefix'=>'task'], function(){
         Route::get('/',                ['as'=>'viewtask',            'uses'=>'TaskController@index']);
         Route::get('create/{list_id}',           ['as'=>'createtask',          'uses'=>'TaskController@create']);
         Route::get('{id}',             ['as'=> 'showtast',           'use'=>'TaskController@show']);
         Route::post('store',           ['as'=>'storetask',           'uses'=>'TaskController@store']);
         Route::get('{id}/edit',        ['as'=>'edittask',            'uses'=>'TaskController@edit']);
         Route::put('{id}',             ['as'=>'updatetask',          'uses'=>'TaskController@update']);
         Route::delete('{id}/delete',   ['as'=>'deletetask',          'uses'=>'TaskController@destroy']);

        });



    Route::group(['prefix'=>'category'], function(){
       Route::get('/',              ['as'=>'viewcategory',      'uses'=>'CategoryController@index']);
       Route::get('create',        ['as'=>'createcategory',    'uses'=>'CategoryController@create']);
       Route::post('store',          ['as'=>'storecategory',     'uses'=>'CategoryController@store']);
       Route::get('{id}/edit',     ['as'=>'editcategory',          'uses'=>'CategoryController@edit']);
       Route::put('{id}',           ['as'=>'updatecategory',        'uses'=>'CategoryController@update']);
       Route::delete('{id}/delete',['as'=>'deletecategory',        'uses'=>'CategoryController@destroy']);

    });


































});





