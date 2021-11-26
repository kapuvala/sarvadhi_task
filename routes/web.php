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

/* ==================================== || Admin Part || ==================================== */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('/','Auth\AuthController@ViewLogin')->middleware('guest:admin');
    Route::get('login','Auth\AuthController@ViewLogin')->middleware('guest:admin')->name('admin.view.login');
    Route::post('login','Auth\AuthController@PostLogin')->name('admin.post.login');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth.admin'], function() {
    
    Route::any('logout','Auth\AuthController@Logout');

    Route::get('dashboard','DashboardController@ViewDashboard')->name('admin.view.dashboard');

    Route::get('users','UserController@ViewUsers')->name('admin.view.users');
    Route::get('users-archive-{id}','UserController@ArchiveUsers')->name('admin.archive.user');

});


/* ==================================== || User Part || ==================================== */
Route::get('/','User\Auth\AuthController@ViewLogin')->middleware('guest:user');
Route::group(['prefix' => 'user', 'namespace' => 'User'], function() {
    
    Route::get('login','Auth\AuthController@ViewLogin')->middleware('guest:user')->name('user.view.login');
    Route::post('login','Auth\AuthController@PostLogin')->name('user.post.login');

    Route::get('register','Auth\AuthController@ViewRegister')->middleware('guest:user')->name('user.view.register');
    Route::post('register','Auth\AuthController@PostRegister')->name('user.post.register');
});

Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => 'auth.user'], function() {
    
    Route::any('logout','Auth\AuthController@Logout');

    Route::get('dashboard','DashboardController@ViewDashboard')->name('user.view.dashboard');

    Route::get('vendor-lists','VendorController@ViewVendorLists')->name('user.view.vendor.lists');
    Route::get('vendor-create','VendorController@ViewCreateVendor')->name('user.create.vendor');
    Route::post('vendor-create','VendorController@PostCreateVendor')->name('user.post.vendor');
    
    Route::get('product-lists','ProductController@ViewProductLists')->name('user.view.product.lists');
    Route::get('product-create','ProductController@ViewCreateProduct')->name('user.create.product');
    Route::post('product-create','ProductController@PostCreateProduct')->name('user.post.product');
    
    Route::get('invoice-lists','InvoiceController@ViewInvoiceLists')->name('user.view.invoice.lists');
    Route::get('invoice-create','InvoiceController@ViewCreateInvoice')->name('user.create.invoice');
    Route::post('invoice-create','InvoiceController@PostCreateInvoice')->name('user.post.invoice');
    Route::get('invoice-edit-{id}','InvoiceController@ViewEditInvoice')->name('user.edit.invoice');
    Route::post('remove-product-qty','InvoiceController@RemoveProductQty')->name('remove.product.qty');
    Route::post('invoice-update','InvoiceController@UpdateInvoice')->name('user.update.invoice');
    Route::get('invoice-save-{id}','InvoiceController@SaveInvoice')->name('user.save.invoice');
    Route::get('invoice-download-{id}','InvoiceController@DownloadInvoice')->name('user.download.invoice');
    Route::get('invoice-send-{id}','InvoiceController@SendInvoice')->name('user.send.invoice');

});
