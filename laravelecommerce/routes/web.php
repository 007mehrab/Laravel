<?php


Route::get('/', 'PagesController@index');

Route::get('/shop', 'PagesController@shop');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

// Myinfo

Route::get('/myaccount', 'PagesController@myaccount');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/login', 'PagesController@login');

Route::get('/register', 'PagesController@register');




Route::get('/cart', 'PagesController@cart');

Route::get('/compare', 'PagesController@compare');

Route::get('/wishlist', 'PagesController@wishlist');
