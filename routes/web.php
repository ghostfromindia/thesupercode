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

Route::get('terms-condition','Client\PageController@terms_condition');
Route::get('privacy-policy','Client\PageController@privacy_policy');

Route::get('covaxin-availability-in-kerala','Client\PageController@covaxin');


Route::get('clear-cache','Client\PageController@cache');
Route::post('save/lead','Client\PageController@savelead');



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

    Route::group(['prefix' => 'quiz', 'namespace' => 'Quiz'], function(){

            Route::get('/', 'QuizController@home');

            Route::get('login/google', 'QuizController@login');
            Route::get('login/google/callback', 'QuizController@login_callback');

            Route::get('questions/{id}','QuizController@quiz_get_questions');

            Route::get('/category', 'QuizController@category');
            Route::get('{slug}', 'QuizController@quiz');

    });

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
        Route::group(['middleware' => ['isAdmin']], function(){
            Route::get('/', 'PageController@home');

            //Select2 urls
            Route::get('ytcategory_list', 'Select2Controller@ytcategory_list')->name('admin.ytcategory.ytcategory_list');
            Route::get('qcategory_list', 'Select2Controller@qcategory_list')->name('admin.qcategory.qcategory_list');


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



            // Youtube channels
            Route::get('quiz', 'Quiz\QuizController@index')->name('admin.quiz.index');
            Route::get('quiz/create', 'Quiz\QuizController@create')->name('admin.quiz.create');
            Route::get('quiz/edit/{id}', 'Quiz\QuizController@edit')->name('admin.quiz.edit');
            Route::get('quiz/destroy/{id}', 'Quiz\QuizController@destroy')->name('admin.quiz.destroy');
            Route::get('quiz/change-status/{id}', 'Quiz\QuizController@changeStatus')->name('admin.quiz.change-status');
            Route::post('quiz/store', 'Quiz\QuizController@store')->name('admin.quiz.store');
            Route::post('quiz/update', 'Quiz\QuizController@update')->name('admin.quiz.update');


            Route::get('qcategory', 'Quiz\CategoryController@index')->name('admin.qcategory.index');
            Route::get('qcategory/create', 'Quiz\CategoryController@create')->name('admin.qcategory.create');
            Route::get('qcategory/edit/{id}', 'Quiz\CategoryController@edit')->name('admin.qcategory.edit');
            Route::get('qcategory/destroy/{id}', 'Quiz\CategoryController@destroy')->name('admin.qcategory.destroy');
            Route::get('qcategory/change-status/{id}', 'Quiz\CategoryController@changeStatus')->name('admin.qcategory.change-status');
            Route::post('qcategory/store', 'Quiz\CategoryController@store')->name('admin.qcategory.store');
            Route::post('qcategory/update', 'Quiz\CategoryController@update')->name('admin.qcategory.update');

            Route::get('quiz/question/{id}/{qid?}', 'Quiz\QuestionController@index')->name('question.create');
            Route::post('quiz/question/update', 'Quiz\QuestionController@update')->name('question.save');
            Route::get('quiz/remove/{id}', 'Quiz\QuestionController@remove')->name('question.remove');


            Route::post('ytcategory/change-category', 'YTCategoryController@change_category');



        });
    });

});


