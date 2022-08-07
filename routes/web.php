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

Route::get('/admin', 'App\Http\Controllers\AdminUserController@list_user');
Route::get('/admin/user/list', 'App\Http\Controllers\AdminUserController@list_user')
    ->name('list_user');
Route::get('/admin/user/listCat', 'App\Http\Controllers\AdminUserController@list_cat_user')
    ->name('list_cat_user');
Route::get('/admin/user/add', 'App\Http\Controllers\AdminUserController@add_user')
    ->name('add_user');

Route::get('/admin/post/list', 'App\Http\Controllers\AdminController@list_post')
    ->name('list_post');
Route::get('/admin/post/listCat', 'App\Http\Controllers\AdminController@list_cat_post')
    ->name('list_cat_post');
Route::get('/admin/post/add', 'App\Http\Controllers\AdminController@add_post')
    ->name('add_post');

Route::get('/admin/product/list', 'App\Http\Controllers\AdminProductController@list_product')
    ->name('list_product');
Route::get('/admin/product/listCat', 'App\Http\Controllers\AdminProductController@list_cat_product')
    ->name('list_cat_product');
Route::get('/admin/product/add', 'App\Http\Controllers\AdminProductController@add_product')
    ->name('add_product');

Route::get('/admin/page/list', 'App\Http\Controllers\AdminController@list_page')
    ->name('list_page');
Route::get('/admin/page/add', 'App\Http\Controllers\AdminController@add_page')
    ->name('add_page');

Route::get('/admin/order/list', 'App\Http\Controllers\AdminController@list_order')
    ->name('list_order');
Route::get('/admin/customer/list', 'App\Http\Controllers\AdminController@list_customer')
    ->name('list_customer');

Route::get('/admin/menu', 'App\Http\Controllers\AdminController@menu')
    ->name('menu');

Route::get('/admin/info_account', 'App\Http\Controllers\AdminController@info_account')
    ->name('info_account');
