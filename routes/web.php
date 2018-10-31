<?php

Route::get('my-posts', 'PostController@myPosts');

Route::resource('posts', 'PostController');
