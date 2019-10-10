<?php

// READ
Route::get('/', 'PostController@index') -> name('post.index');

Route::get('/post/{id}', 'PostController@show') -> name('post.show');
Route::get('/category/{id}', 'CategoryController@show') -> name('category.show');

// CREATE
Route::get('/admin/post/create', 'PostController@create') -> name('post.create');

// UPDATE
Route::get('/admin/post/{id}/edit', 'PostController@edit') -> name('post.edit');





// // CREATE
// Route::get('/create', 'placeController@create') -> name('plc.create');
// Route::post('/create', 'placeController@store') -> name('plc.store');

// // UPDATE
// Route::get('/{id}/edit', 'placeController@edit') -> name('plc.edit');
// Route::post('/{id}', 'placeController@update') -> name('plc.update');

// // DESTROY
// Route::get('/{id}/delete', 'placeController@destroy') -> name('plc.destroy');