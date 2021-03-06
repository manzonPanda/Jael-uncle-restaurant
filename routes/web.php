<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//where is ->name('login') routes ?

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/userProfile', 'AdminController@userProfile')->name('admin.userProfile');

Route::get('/admin/getSummaryBreakdownTable', 'AdminController@getSummaryBreakdownTable')->name('dashboard.getSummaryBreakdownTable');
Route::Get('/admin/viewSummaryBreakdown/{dateSelected}', 'AdminController@viewSummaryBreakdown');    


Route::get('/admin/categories', 'AdminController@categories')->name('admin.categories');
Route::Post('/admin/categories/updateStatus', 'AdminController@updateCategoryStatus');
Route::Post('admin/categories/createCategories', 'AdminController@createCategories')->name('admin.createCategories');
Route::Post('admin/categories/editCategory', 'AdminController@editCategory')->name('admin.editCategory');
Route::get('/admin/categories/getCategories', 'AdminController@getCategories')->name('categories.getCategories');

Route::get('/admin/menus', 'AdminController@menus')->name('admin.menus');
Route::Post('/admin/menus/updateProductStatus', 'AdminController@updateProductStatus');
Route::get('/admin/menus/getMenus', 'AdminController@getMenus')->name('menus.getMenus');
Route::Post('admin/menus/createProduct', 'AdminController@createProduct')->name('admin.createProduct');
Route::Post('admin/menus/editProduct', 'AdminController@editProduct')->name('admin.editProduct');
Route::Post('admin/menus/createBundle', 'AdminController@createBundle')->name('admin.createBundle');
Route::get('/admin/getCategoriesDropdown/{categorySearch}', 'AdminController@getCategoriesDropdown');
Route::get('/admin/getBundleForSpecificCategory/{bundleCategorySearch}', 'AdminController@getBundleForSpecificCategory');
Route::get('/admin/getProductsDropdown/{productSearch}', 'AdminController@getProductsDropdown');


Route::get('/admin/orders', 'AdminController@orders')->name('admin.orders');
Route::Post('admin/orders/createOrder', 'AdminController@createOrder')->name('admin.createOrder');
Route::get('/admin/orders/getManageOrders', 'AdminController@getManageOrders')->name('orders.getManageOrders');
Route::Get('/admin/orders/getMenusToCarousel/{category}', 'AdminController@getMenusToCarousel');
Route::Get('admin/editReceipt/{transaction_id}', 'AdminController@editReceipt');    
Route::Get('admin/viewReceiptOrder/{transaction_id}', 'AdminController@viewReceiptOrder');    
Route::Post('admin/customerWillPay/{transaction_id}', 'AdminController@customerWillPay');

Route::Get('/admin/orders/getCategoriesInOrders', 'AdminController@getCategoriesInOrders');
Route::Get('/admin/orders/getTablesInOrders', 'AdminController@getTablesInOrders');
// Route::get('admin/orders/getMenusToCarousel', 'AdminController@getMenusToCarousel')->name('orders.getMenusToCarousel');
Route::get('/admin/getMenusToCarouselBySearch/{productSearch}', 'AdminController@getMenusToCarouselBySearch');

Route::get('/admin/tables', 'AdminController@tables')->name('admin.tables');
Route::Post('admin/menus/createTable', 'AdminController@createTable')->name('admin.createTable');
Route::get('/admin/tables/getManageTables', 'AdminController@getManageTables')->name('tables.getManageTables');

Route::get('/admin/reports', 'AdminController@reports')->name('admin.reports');
Route::get('/admin/aboutUs', 'AdminController@aboutUs')->name('admin.aboutUs');
Route::get('/admin/settings', 'AdminController@settings')->name('admin.settings');
