<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => 'api'], function($router) {
    Route::get('/', function() {
        return response()->json([
            'message' => 'This is a simple example of item returned by your APIs. Everyone can see it.'
        ]);
    })->name('api.hello');
});

Route::group(['middleware' =>  ['jwt.auth'],'prefix' => 'auth'], function ($router) {
    
Route::get('/admins', 'App\Http\Controllers\Api\Auth\AdminsController@index')->name('api.auth.index.admins');
Route::get('/admins/{id}', 'App\Http\Controllers\Api\Auth\AdminsController@show')->name('api.auth.show.admins');
Route::post('/admins', 'App\Http\Controllers\Api\Auth\AdminsController@store')->name('api.auth.store.admins');
Route::put('/admins/{id}', 'App\Http\Controllers\Api\Auth\AdminsController@update')->name('api.auth.update.admins');
Route::delete('/admins/{id}', 'App\Http\Controllers\Api\Auth\AdminsController@destroy')->name('api.auth.delete.admins');
Route::get('/admins/search/{search}', 'App\Http\Controllers\Api\Auth\AdminsController@search')->name('api.auth.search.admins');
Route::get('/brand_models', 'App\Http\Controllers\Api\Auth\BrandModelsController@index')->name('api.auth.index.brand_models');
Route::get('/brand_models/{id}', 'App\Http\Controllers\Api\Auth\BrandModelsController@show')->name('api.auth.show.brand_models');
Route::post('/brand_models', 'App\Http\Controllers\Api\Auth\BrandModelsController@store')->name('api.auth.store.brand_models');
Route::put('/brand_models/{id}', 'App\Http\Controllers\Api\Auth\BrandModelsController@update')->name('api.auth.update.brand_models');
Route::delete('/brand_models/{id}', 'App\Http\Controllers\Api\Auth\BrandModelsController@destroy')->name('api.auth.delete.brand_models');
Route::get('/brand_models/search/{search}', 'App\Http\Controllers\Api\Auth\BrandModelsController@search')->name('api.auth.search.brand_models');
Route::get('/brands', 'App\Http\Controllers\Api\Auth\BrandsController@index')->name('api.auth.index.brands');
Route::get('/brands/{id}', 'App\Http\Controllers\Api\Auth\BrandsController@show')->name('api.auth.show.brands');
Route::post('/brands', 'App\Http\Controllers\Api\Auth\BrandsController@store')->name('api.auth.store.brands');
Route::put('/brands/{id}', 'App\Http\Controllers\Api\Auth\BrandsController@update')->name('api.auth.update.brands');
Route::delete('/brands/{id}', 'App\Http\Controllers\Api\Auth\BrandsController@destroy')->name('api.auth.delete.brands');
Route::get('/brands/search/{search}', 'App\Http\Controllers\Api\Auth\BrandsController@search')->name('api.auth.search.brands');
Route::get('/categories', 'App\Http\Controllers\Api\Auth\CategoriesController@index')->name('api.auth.index.categories');
Route::get('/categories/{id}', 'App\Http\Controllers\Api\Auth\CategoriesController@show')->name('api.auth.show.categories');
Route::post('/categories', 'App\Http\Controllers\Api\Auth\CategoriesController@store')->name('api.auth.store.categories');
Route::put('/categories/{id}', 'App\Http\Controllers\Api\Auth\CategoriesController@update')->name('api.auth.update.categories');
Route::delete('/categories/{id}', 'App\Http\Controllers\Api\Auth\CategoriesController@destroy')->name('api.auth.delete.categories');
Route::get('/categories/search/{search}', 'App\Http\Controllers\Api\Auth\CategoriesController@search')->name('api.auth.search.categories');
Route::get('/countries', 'App\Http\Controllers\Api\Auth\CountriesController@index')->name('api.auth.index.countries');
Route::get('/countries/{id}', 'App\Http\Controllers\Api\Auth\CountriesController@show')->name('api.auth.show.countries');
Route::post('/countries', 'App\Http\Controllers\Api\Auth\CountriesController@store')->name('api.auth.store.countries');
Route::put('/countries/{id}', 'App\Http\Controllers\Api\Auth\CountriesController@update')->name('api.auth.update.countries');
Route::delete('/countries/{id}', 'App\Http\Controllers\Api\Auth\CountriesController@destroy')->name('api.auth.delete.countries');
Route::get('/countries/search/{search}', 'App\Http\Controllers\Api\Auth\CountriesController@search')->name('api.auth.search.countries');
Route::get('/m_option_values', 'App\Http\Controllers\Api\Auth\MOptionValuesController@index')->name('api.auth.index.m_option_values');
Route::get('/m_option_values/{id}', 'App\Http\Controllers\Api\Auth\MOptionValuesController@show')->name('api.auth.show.m_option_values');
Route::post('/m_option_values', 'App\Http\Controllers\Api\Auth\MOptionValuesController@store')->name('api.auth.store.m_option_values');
Route::put('/m_option_values/{id}', 'App\Http\Controllers\Api\Auth\MOptionValuesController@update')->name('api.auth.update.m_option_values');
Route::delete('/m_option_values/{id}', 'App\Http\Controllers\Api\Auth\MOptionValuesController@destroy')->name('api.auth.delete.m_option_values');
Route::get('/m_option_values/search/{search}', 'App\Http\Controllers\Api\Auth\MOptionValuesController@search')->name('api.auth.search.m_option_values');
Route::get('/m_options', 'App\Http\Controllers\Api\Auth\MOptionsController@index')->name('api.auth.index.m_options');
Route::get('/m_options/{id}', 'App\Http\Controllers\Api\Auth\MOptionsController@show')->name('api.auth.show.m_options');
Route::post('/m_options', 'App\Http\Controllers\Api\Auth\MOptionsController@store')->name('api.auth.store.m_options');
Route::put('/m_options/{id}', 'App\Http\Controllers\Api\Auth\MOptionsController@update')->name('api.auth.update.m_options');
Route::delete('/m_options/{id}', 'App\Http\Controllers\Api\Auth\MOptionsController@destroy')->name('api.auth.delete.m_options');
Route::get('/m_options/search/{search}', 'App\Http\Controllers\Api\Auth\MOptionsController@search')->name('api.auth.search.m_options');
Route::get('/markets', 'App\Http\Controllers\Api\Auth\MarketsController@index')->name('api.auth.index.markets');
Route::get('/markets/{id}', 'App\Http\Controllers\Api\Auth\MarketsController@show')->name('api.auth.show.markets');
Route::post('/markets', 'App\Http\Controllers\Api\Auth\MarketsController@store')->name('api.auth.store.markets');
Route::put('/markets/{id}', 'App\Http\Controllers\Api\Auth\MarketsController@update')->name('api.auth.update.markets');
Route::delete('/markets/{id}', 'App\Http\Controllers\Api\Auth\MarketsController@destroy')->name('api.auth.delete.markets');
Route::get('/markets/search/{search}', 'App\Http\Controllers\Api\Auth\MarketsController@search')->name('api.auth.search.markets');
Route::get('/migrations', 'App\Http\Controllers\Api\Auth\MigrationsController@index')->name('api.auth.index.migrations');
Route::get('/migrations/{id}', 'App\Http\Controllers\Api\Auth\MigrationsController@show')->name('api.auth.show.migrations');
Route::post('/migrations', 'App\Http\Controllers\Api\Auth\MigrationsController@store')->name('api.auth.store.migrations');
Route::put('/migrations/{id}', 'App\Http\Controllers\Api\Auth\MigrationsController@update')->name('api.auth.update.migrations');
Route::delete('/migrations/{id}', 'App\Http\Controllers\Api\Auth\MigrationsController@destroy')->name('api.auth.delete.migrations');
Route::get('/migrations/search/{search}', 'App\Http\Controllers\Api\Auth\MigrationsController@search')->name('api.auth.search.migrations');
Route::get('/option_values', 'App\Http\Controllers\Api\Auth\OptionValuesController@index')->name('api.auth.index.option_values');
Route::get('/option_values/{id}', 'App\Http\Controllers\Api\Auth\OptionValuesController@show')->name('api.auth.show.option_values');
Route::post('/option_values', 'App\Http\Controllers\Api\Auth\OptionValuesController@store')->name('api.auth.store.option_values');
Route::put('/option_values/{id}', 'App\Http\Controllers\Api\Auth\OptionValuesController@update')->name('api.auth.update.option_values');
Route::delete('/option_values/{id}', 'App\Http\Controllers\Api\Auth\OptionValuesController@destroy')->name('api.auth.delete.option_values');
Route::get('/option_values/search/{search}', 'App\Http\Controllers\Api\Auth\OptionValuesController@search')->name('api.auth.search.option_values');
Route::get('/options', 'App\Http\Controllers\Api\Auth\OptionsController@index')->name('api.auth.index.options');
Route::get('/options/{id}', 'App\Http\Controllers\Api\Auth\OptionsController@show')->name('api.auth.show.options');
Route::post('/options', 'App\Http\Controllers\Api\Auth\OptionsController@store')->name('api.auth.store.options');
Route::put('/options/{id}', 'App\Http\Controllers\Api\Auth\OptionsController@update')->name('api.auth.update.options');
Route::delete('/options/{id}', 'App\Http\Controllers\Api\Auth\OptionsController@destroy')->name('api.auth.delete.options');
Route::get('/options/search/{search}', 'App\Http\Controllers\Api\Auth\OptionsController@search')->name('api.auth.search.options');
Route::get('/product_m_option_values', 'App\Http\Controllers\Api\Auth\ProductMOptionValuesController@index')->name('api.auth.index.product_m_option_values');
Route::get('/product_m_option_values/{id}', 'App\Http\Controllers\Api\Auth\ProductMOptionValuesController@show')->name('api.auth.show.product_m_option_values');
Route::post('/product_m_option_values', 'App\Http\Controllers\Api\Auth\ProductMOptionValuesController@store')->name('api.auth.store.product_m_option_values');
Route::put('/product_m_option_values/{id}', 'App\Http\Controllers\Api\Auth\ProductMOptionValuesController@update')->name('api.auth.update.product_m_option_values');
Route::delete('/product_m_option_values/{id}', 'App\Http\Controllers\Api\Auth\ProductMOptionValuesController@destroy')->name('api.auth.delete.product_m_option_values');
Route::get('/product_m_option_values/search/{search}', 'App\Http\Controllers\Api\Auth\ProductMOptionValuesController@search')->name('api.auth.search.product_m_option_values');
Route::get('/product_option_values', 'App\Http\Controllers\Api\Auth\ProductOptionValuesController@index')->name('api.auth.index.product_option_values');
Route::get('/product_option_values/{id}', 'App\Http\Controllers\Api\Auth\ProductOptionValuesController@show')->name('api.auth.show.product_option_values');
Route::post('/product_option_values', 'App\Http\Controllers\Api\Auth\ProductOptionValuesController@store')->name('api.auth.store.product_option_values');
Route::put('/product_option_values/{id}', 'App\Http\Controllers\Api\Auth\ProductOptionValuesController@update')->name('api.auth.update.product_option_values');
Route::delete('/product_option_values/{id}', 'App\Http\Controllers\Api\Auth\ProductOptionValuesController@destroy')->name('api.auth.delete.product_option_values');
Route::get('/product_option_values/search/{search}', 'App\Http\Controllers\Api\Auth\ProductOptionValuesController@search')->name('api.auth.search.product_option_values');
Route::get('/product_type_m_options', 'App\Http\Controllers\Api\Auth\ProductTypeMOptionsController@index')->name('api.auth.index.product_type_m_options');
Route::get('/product_type_m_options/{id}', 'App\Http\Controllers\Api\Auth\ProductTypeMOptionsController@show')->name('api.auth.show.product_type_m_options');
Route::post('/product_type_m_options', 'App\Http\Controllers\Api\Auth\ProductTypeMOptionsController@store')->name('api.auth.store.product_type_m_options');
Route::put('/product_type_m_options/{id}', 'App\Http\Controllers\Api\Auth\ProductTypeMOptionsController@update')->name('api.auth.update.product_type_m_options');
Route::delete('/product_type_m_options/{id}', 'App\Http\Controllers\Api\Auth\ProductTypeMOptionsController@destroy')->name('api.auth.delete.product_type_m_options');
Route::get('/product_type_m_options/search/{search}', 'App\Http\Controllers\Api\Auth\ProductTypeMOptionsController@search')->name('api.auth.search.product_type_m_options');
Route::get('/product_types', 'App\Http\Controllers\Api\Auth\ProductTypesController@index')->name('api.auth.index.product_types');
Route::get('/product_types/{id}', 'App\Http\Controllers\Api\Auth\ProductTypesController@show')->name('api.auth.show.product_types');
Route::post('/product_types', 'App\Http\Controllers\Api\Auth\ProductTypesController@store')->name('api.auth.store.product_types');
Route::put('/product_types/{id}', 'App\Http\Controllers\Api\Auth\ProductTypesController@update')->name('api.auth.update.product_types');
Route::delete('/product_types/{id}', 'App\Http\Controllers\Api\Auth\ProductTypesController@destroy')->name('api.auth.delete.product_types');
Route::get('/product_types/search/{search}', 'App\Http\Controllers\Api\Auth\ProductTypesController@search')->name('api.auth.search.product_types');
Route::get('/products', 'App\Http\Controllers\Api\Auth\ProductsController@index')->name('api.auth.index.products');
Route::get('/products/{id}', 'App\Http\Controllers\Api\Auth\ProductsController@show')->name('api.auth.show.products');
Route::post('/products', 'App\Http\Controllers\Api\Auth\ProductsController@store')->name('api.auth.store.products');
Route::put('/products/{id}', 'App\Http\Controllers\Api\Auth\ProductsController@update')->name('api.auth.update.products');
Route::delete('/products/{id}', 'App\Http\Controllers\Api\Auth\ProductsController@destroy')->name('api.auth.delete.products');
Route::get('/products/search/{search}', 'App\Http\Controllers\Api\Auth\ProductsController@search')->name('api.auth.search.products');
Route::get('/shops', 'App\Http\Controllers\Api\Auth\ShopsController@index')->name('api.auth.index.shops');
Route::get('/shops/{id}', 'App\Http\Controllers\Api\Auth\ShopsController@show')->name('api.auth.show.shops');
Route::post('/shops', 'App\Http\Controllers\Api\Auth\ShopsController@store')->name('api.auth.store.shops');
Route::put('/shops/{id}', 'App\Http\Controllers\Api\Auth\ShopsController@update')->name('api.auth.update.shops');
Route::delete('/shops/{id}', 'App\Http\Controllers\Api\Auth\ShopsController@destroy')->name('api.auth.delete.shops');
Route::get('/shops/search/{search}', 'App\Http\Controllers\Api\Auth\ShopsController@search')->name('api.auth.search.shops');
   
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});


