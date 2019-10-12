<?php

// # # POST # #
// homepage con 5 post più recenti, visualizzazione dettagliata singolo post, creazione e modifica post
Route::get('/', 'PostController@index') -> name('post.index');
Route::get('/post/{id}', 'PostController@show') -> name('post.show');
// CREATE
Route::get('/admin/post/create', 'PostController@create') -> name('post.create');
Route::post('/admin/post', 'PostController@store') -> name('post.store');
// UPDATE
Route::get('/admin/post/{id}/edit', 'PostController@edit') -> name('post.edit');
Route::post('/admin/post/{id}', 'PostController@update') -> name('post.update');


// # # CATEGORY # #
// visualizza tutti i post di una categoria
Route::get('/category/{id}', 'CategoryController@show') -> name('category.show');


// # # TAG # #
// visualizza tutti i post di un tag
Route::get('/tag/{id}', 'TagController@show') -> name('tag.show');
