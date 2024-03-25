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

Route::get('/', 'IndexController@index')->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/** Admin panel */

Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin', function(){
        return view('admin.index');
    })->name('admin.index');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
//    Route::get('', 'IndexController');
    /** Category Admin */
    Route::group(['namespace' => 'Categories', 'prefix' => 'categories'], function() {
        Route::get('', 'IndexController')->name('categories.index');
        Route::get('create','CreateController')->name('categories.create');
        Route::post('','StoreController')->name('categories.store');
        Route::get('edit/{category}', 'EditController')->name('categories.edit');
        Route::patch('update/{category}', 'UpdateController')->name('categories.update');
        Route::delete('delete/{category}', 'DeleteController')->name('categories.delete');
    });

    /** Sub-Category Admin */
    Route::group(['namespace' => 'SubCategories', 'prefix' => 'sub-categories'], function() {
        Route::get('', 'IndexController')->name('sub.categories.index');
        Route::get('create', 'CreateController')->name('sub.categories.create');
        Route::post('', 'StoreController')->name('sub.categories.store');
        Route::get('edit/{sub_category}', 'EditController')->name('sub.categories.edit');
        Route::patch('update/{sub_category}', 'UpdateController')->name('sub.categories.update');
        Route::delete('delete/{sub_category}', 'DeleteController')->name('sub.categories.delete');
    });

    /** Product Admin */
    Route::group(['namespace' => 'Products', 'prefix' => 'products'], function() {
        Route::get('', 'IndexController')->name('products.index');
        Route::get('create', 'CreateController')->name('products.create');
        Route::post('', 'StoreController')->name('products.store');
        Route::get('edit/{product}', 'EditController')->name('products.edit');
        Route::patch('update/{product}', 'UpdateController')->name('products.update');
        Route::delete('delete/{product}', 'DeleteController')->name('products.delete');
    });
});

Route::group(['namespace' => 'Pages'], function() {

    Route::group(['namespace' => 'Product', 'prefix' => 'product'], function() {
        Route::get('edit/{product}', 'IndexController')->name('product.edit');
    });
    Route::group(['namespace' => 'Order', 'prefix' => 'order'], function () {
        Route::get('', 'OrderController@index')->name('order.index');
        Route::get('checkout', 'OrderController@checkout')->name('order.checkout');
        Route::post('add/{id}', 'OrderController@add')->where('id', '[0-9]+')->name('order.add');
        Route::post('delete', 'OrderController@delete')->name('order.delete');
    });

});

