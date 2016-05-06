<?php

Blade::setContentTags('<%', '%>');
Blade::setEscapedContentTags('<%%', '%%>');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/my_profile',[function(){
  return view('user_perfil');
}]);


Route::get('/publicprofile={email}','PublicProfile@getView');
Route::get('/codigo_id={id}','EditorController@getView');
Route::post('code_view/info','EditorController@getInfo');




//
// Route::get('/feed' ,['middleware' =>'itson', function(){
//   return view('feed');
// }]);
Route::post('sendregister','RegisterController@register');
Route::post('access','LoginController@login');
Route::post('sendapost','PostsController@post_a_post');
Route::post('getmypost','PostsController@get_my_post');
Route::post('getmyinfo','InfoController@get_my_info');
Route::post('publicprofile/getposts','PublicProfile@get_public_post');
Route::post('publicprofile/getinfo','PublicProfile@get_public_info');
Route::post('publicprofile/follow','PublicProfile@do_follow');
Route::post('publicprofile/follow_validate','PublicProfile@follow_validate');
Route::post('publicprofile/getfollowers','PublicProfile@get_followers');
Route::post('publicprofile/post','PublicProfile@post_to_public');
Route::post('publicprofile/like','PublicProfile@addLike');
Route::post('group/create','GroupsController@addGroup');
Route::post('group/info','GroupsController@getData');
Route::post('group/new_member','GroupsController@addMember');
Route::post('postcode','PostsController@post_a_code');
Route::post('getMyFollowers','InfoController@get_followers');



Route::group(['middleware' => ['web']], function () {
    //
});
