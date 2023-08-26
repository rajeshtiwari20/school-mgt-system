<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('contact', function () {
    return view('pages.contact');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
    
    /** Localized Routes here **/
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('test',function(){
		return View::make('test');
	});

    });

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    Route::match (['get','post'],'login','AdminController@login');

    Route::group(['middleware'=>['admin']],function(){
        Route::get('dashboard','DashboardController@index');

        Route::resource('student', StudentController::class);
        Route::resource('parent', ParantController::class);
        Route::get('logout','AdminController@logout');
     });
    
});
  