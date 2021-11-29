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

//Frontend
Route::get('/', 'HomeController@index');

Route::get('/index', 'HomeController@index');

 // 1. register
Route::get('/dangky', 'HomeController@register');

Route::post('/dangky_user', 'HomeController@register_user');

// 2.login
Route::get('/dangnhap', 'HomeController@login');

Route::post('/dangnhap_user', 'HomeController@login_user');

// 3. đăng xuất
Route::get('/login', 'HomeController@logout');

//Backend
Route::get('/admin', 'AdminController@index');

Route::get('/dashboard', 'AdminController@show_dashboard');

Route::post('/admin-dashboard','AdminController@dashboard');

Route::get('/logout', 'AdminController@logout');


// Category Product 
Route::get('/add-category-product', 'CategoryProduct@add_category_product');

Route::get('/all-category-product', 'CategoryProduct@all_category_product');

Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');
