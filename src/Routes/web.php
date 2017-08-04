<?php
Route::group([
    'prefix'    =>  'zones',
    'namespace' =>  'AccessManager\Zones\Http\Controllers',
], function(){

    Route::get('/', [
        'uses'      =>  'ZonesController@getIndex',
        'as'        =>  'zones.index',
    ]);

    Route::get('/add', [
        'uses'      =>  'ZonesController@getAdd',
        'as'        =>  'zones.add',
    ]);

    Route::post('/add', [
        'uses'      =>  'ZonesController@postAdd',
        'as'        =>  'zones.add.post',
    ]);

    Route::get('edit/{id}', [
        'uses'      =>  'ZonesController@getEdit',
        'as'        =>  'zones.edit',
    ]);

    Route::post('edit', [
        'uses'      =>  'ZonesController@postEdit',
        'as'        =>  'zones.edit.post',
    ]);

    Route::post('delete', [
        'uses'      =>  'ZonesController@postDelete',
        'as'        =>  'zones.delete',
    ]);
});