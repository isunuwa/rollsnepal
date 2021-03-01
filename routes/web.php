<?php

Route::get('/', ['uses' => 'General\HomeController@getIndex', 'as' => 'get.home' ]);
Route::get('login', ['uses' => 'Auth\LoginController@getLogin', 'as' => 'login' ]);
Route::post('login', ['uses' => 'Auth\LoginController@postLogin', 'as' => 'post.login']);
Route::get('signup', ['uses' => 'Auth\RegisterController@getRegister', 'as' => 'get.signup' ]);
Route::post('signup', ['uses' => 'Auth\RegisterController@postRegister', 'as' => 'post.signup' ]);
Route::get('logout', ['uses' => 'Auth\LoginController@getLogout', 'as' => 'get.logout']);
Route::get('about-us', ['uses' => 'About\AboutUsController@getIndex', 'as' => 'get.aboutus' ]);

Route::get('post/view/{title}', ['uses' => 'General\HomeController@singlePost', 'as' => 'get.singlepost' ]);
Route::get('location/{location}', ['uses' => 'General\HomeController@postByLocation', 'as' => 'location.single' ]);
Route::get('{username}', ['uses' => 'User\UserController@getProfile', 'as' => 'get.profile' ]);

Route::group(['middleware' => 'auth'], function() {
    Route::get('user/home', ['uses' => 'User\UserController@getIndex', 'as' => 'get.userhome' ]);
    
    // post CRUD routes
    Route::get('post/create', ['uses' => 'Post\PostController@getCreatePost', 'as' => 'get.createpost' ]);
    Route::post('post/create', ['uses' => 'Post\PostController@postCreatePost', 'as' => 'post.createpost' ]);
    Route::get('post/edit/{id}', ['uses' => 'Post\PostController@getUpdatePost', 'as' => 'get.editpost' ]);
    Route::put('post/edit/{id}', ['uses' => 'Post\PostController@postUpdatePost', 'as' => 'post.editpost' ]);
    Route::get('post/delete/{id}', ['uses' => 'Post\PostController@deletePost', 'as' => 'get.deletepost' ]);

    // post comment
    Route::post('post/{post}/comments', ['uses' => 'Comment\CommentController@postStoreComment', 'as' => 'post.storecomment' ]);
    
    // post like 
    
    Route::post('like', ['uses' => 'Post\PostController@postLikePost', 'as' => 'post.like' ]);
});
