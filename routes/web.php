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

Route::get('/', 'PageController@main')->name('mainpage');
Route::get('itemsbybrand/{id}', 'PageController@itemsbybrand')->name('brandpage');
Route::get('itemdetail/{id}', 'PageController@itemdetailfun')->name('itemdetailpage');
Route::get('filteritems','PageController@filteritems')->name('filteritemspage');
Route::get('loginpage', 'PageController@loginfun')->name('loginpage');
Route::get('promotion', 'PageController@promotionfun')->name('promotionpage');
Route::get('registerform', 'PageController@registerfun')->name('registerpage');
Route::get('shoppingcart', 'PageController@shoppingcartfun')->name('shoppingcartpage');
Route::get('subcategory', 'PageController@subcategoryfun')->name('subcategorypage');
//Backend----------------------------------------------------------------------------
//Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
//Route::resource('items','ItemController');
Route::middleware('role:Admin')->group(function(){
	Route::get('dashboard', 'BackendController@dashboardfun')->name('dashboardpage');
    Route::resource('items','ItemController');
Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubcategoryController');
Route::resource('orders','OrderController');
Route::resource('registers','RegisterController');
 
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
