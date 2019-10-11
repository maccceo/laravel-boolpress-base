<?php

// READ
Route::get('/', 'PostController@index') -> name('post.index');

Route::get('/post/{id}', 'PostController@show') -> name('post.show');
Route::get('/category/{id}', 'CategoryController@show') -> name('category.show');

// CREATE
Route::get('/admin/post/create', 'PostController@create') -> name('post.create');
Route::post('/admin/post/create', 'PostController@store') -> name('post.store');

// UPDATE
Route::get('/admin/post/{id}/edit', 'PostController@edit') -> name('post.edit');
Route::post('/admin/post/{id}', 'PostController@update') -> name('post.update');