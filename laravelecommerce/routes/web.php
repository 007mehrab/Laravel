<?php


Route::get('/', 'PagesController@index');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

Route::get('/blog', 'PagesController@blog');

Route::get('/shop', 'PagesController@shop');

// Myinfo

Route::get('/myaccount', 'PagesController@myaccount');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/login', 'PagesController@login');

Route::get('/register', 'PagesController@register');




Route::get('/cart', 'PagesController@cart');

Route::get('/compare', 'PagesController@compare');

Route::get('/wishlist', 'PagesController@wishlist');
