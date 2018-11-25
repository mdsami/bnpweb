<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




// RESTful API routes
Route::Group(['prefix' => '/v1'], function () {
    Route::post('complain', 'APIController@saveComplain');
    Route::get('fari', 'APIController@allFari');
    Route::get('total-fari', 'APIController@totalFari');
    Route::get('thana', 'APIController@allThana');
    Route::get('total-thana', 'APIController@totalThana');
    Route::get('total-thana-fari', 'APIController@totalThanaFari');


    // // general
    // Route::get('/website/status', 'APIsController@website_status');
    // Route::get('/website/info/{lang?}', 'APIsController@website_info');
    // Route::get('/website/contacts/{lang?}', 'APIsController@website_contacts');
    // Route::get('/website/style/{lang?}', 'APIsController@website_style');
    // Route::get('/website/social', 'APIsController@website_social');
    // Route::get('/website/settings', 'APIsController@website_settings');
    // Route::get('/menu/{menu_id}/{lang?}', 'APIsController@menu');
    // Route::get('/banners/{group_id}/{lang?}', 'APIsController@banners');
    // // section & topics
    // Route::get('/section/{section_id}/{lang?}', 'APIsController@section');
    // Route::get('/categories/{section_id}/{lang?}', 'APIsController@categories');
    // Route::get('/topics/{section_id}/page/{page_number?}/count/{topics_count?}/{lang?}', 'APIsController@topics');
    // // topic sub details
    // Route::get('/topic/fields/{topic_id}/{lang?}', 'APIsController@topic_fields');
    // Route::get('/topic/photos/{topic_id}/{lang?}', 'APIsController@topic_photos');
    // Route::get('/topic/photo/{photo_id}/{lang?}', 'APIsController@topic_photo');
    // Route::get('/topic/maps/{topic_id}/{lang?}', 'APIsController@topic_maps');
    // Route::get('/topic/map/{map_id}/{lang?}', 'APIsController@topic_map');
    // Route::get('/topic/files/{topic_id}/{lang?}', 'APIsController@topic_files');
    // Route::get('/topic/file/{file_id}/{lang?}', 'APIsController@topic_file');
    // Route::get('/topic/comments/{topic_id}/{lang?}', 'APIsController@topic_comments');
    // Route::get('/topic/comment/{comment_id}/{lang?}', 'APIsController@topic_comment');
    // Route::get('/topic/related/{topic_id}/{lang?}', 'APIsController@topic_related');
    // // topic page
    // Route::get('/topic/{topic_id}/{lang?}', 'APIsController@topic');
    // // user topics
    // Route::get('/user/{user_id}/topics/page/{page_number?}/count/{topics_count?}/{lang?}', 'APIsController@user_topics');
    // // Forms Submit
    // Route::post('/subscribe', 'APIsController@subscribeSubmit');
    // Route::post('/comment', 'APIsController@commentSubmit');
    // Route::post('/order', 'APIsController@orderSubmit');
    // Route::post('/contact', 'APIsController@ContactPageSubmit');
});
// .. End of RESTful API routes
