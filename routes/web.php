<?php

use Illuminate\Support\Facades\Route;

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

Route::get('youtube-analysis','Client\Youtube\YTController@home');
Route::get('youtube-analysis/category/{slug}','Client\Youtube\YTController@category');
Route::get('youtube-analysis/channel/{slug}','Client\Youtube\YTController@channel');
Route::get('youtube-analysis/most-viewed-channels','Client\Youtube\YTController@most_viewed');
Route::get('slug-generator','Client\Youtube\YTController@make_category_slug');


Route::middleware(['webroutes'])->group(function () {

    Route::get('login/{website}', 'Login\LoginController@redirectToProvider');
    Route::get('login/{website}/callback', 'Login\LoginController@handleProviderCallback');

    Route::get('/', 'Client\PageController@home');

    //for cron jobs
    Route::get('ytchannel/sync-statistics', 'Admin\YTChannelController@sync_statistics')->name('admin.ytchannel.sync_statistics');
    Route::get('ytchannel/sync-channels', 'Admin\YTChannelController@sync_channels');

    Route::get('image-upload-test','Client\PageController@image_upload');



    Route::get('login', 'Login\LoginController@login');
    Route::get('register', 'Login\LoginController@register');

    Route::post('login', 'Login\LoginController@attempt_login');
    Route::post('register', 'Login\LoginController@attempt_register');

    Route::get('logout', 'Login\LoginController@logout');

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
        Route::group(['middleware' => ['isAdmin']], function(){
            Route::get('/', 'PageController@home');

            //Select2 urls
            Route::get('ytcategory_list', 'Select2Controller@ytcategory_list')->name('admin.ytcategory.ytcategory_list');


            // Youtube channels
            Route::get('ytchannel', 'YTChannelController@index')->name('admin.ytchannel.index');
            Route::get('ytchannel/create', 'YTChannelController@create')->name('admin.ytchannel.create');
            Route::get('ytchannel/edit/{id}', 'YTChannelController@edit')->name('admin.ytchannel.edit');
            Route::get('ytchannel/destroy/{id}', 'YTChannelController@destroy')->name('admin.ytchannel.destroy');
            Route::get('ytchannel/change-status/{id}', 'YTChannelController@changeStatus')->name('admin.ytchannel.change-status');
            Route::post('ytchannel/store', 'YTChannelController@store')->name('admin.ytchannel.store');
            Route::post('ytchannel/update', 'YTChannelController@update')->name('admin.ytchannel.update');


            // Youtube categories
            Route::get('ytcategory', 'YTCategoryController@index')->name('admin.ytcategory.index');
            Route::get('ytcategory/create', 'YTCategoryController@create')->name('admin.ytcategory.create');
            Route::get('ytcategory/edit/{id}', 'YTCategoryController@edit')->name('admin.ytcategory.edit');
            Route::get('ytcategory/destroy/{id}', 'YTCategoryController@destroy')->name('admin.ytcategory.destroy');
            Route::get('ytcategory/change-status/{id}', 'YTCategoryController@changeStatus')->name('admin.ytcategory.change-status');
            Route::post('ytcategory/store', 'YTCategoryController@store')->name('admin.ytcategory.store');
            Route::post('ytcategory/update', 'YTCategoryController@update')->name('admin.ytcategory.update');



        });
    });

});


