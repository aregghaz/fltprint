<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
        'uses' => 'HomeController@home',
        'as' => 'home',
    ]);
    Route::post('/Select', [
        'uses' => 'ShopController@urlSelect',
        'as' => 'urlSelect',
    ]);
    Route::get('/identifyUser', [
        'uses' => 'HomeController@identify',
        'as' => 'identifyUser',
    ]);
    Route::post('/identify', [
        'uses' => 'HomeController@identify',
        'as' => 'identify',
    ]);
    Route::post('/registration', [
        'uses' => 'HomeController@registration',
        'as' => 'registration',
    ]);
    Route::post('/registrationUser', [
        'uses' => 'HomeController@registrationUser',
        'as' => 'registrationUser',
    ]);
    Route::get('/logout', [
        'uses' => 'HomeController@logout',
        'as' => 'logout',
    ]);
    Route::get('/client', [
        'uses' => 'HomeController@client',
        'as' => 'client',
    ]);
    route::get('/device', [
        'uses' => 'ShopController@shop',
        'as' => 'device',
    ]);
    route::get('/table', [
        'uses' => 'HomeController@GetProductTable',
        'as' => 'tabel',
    ]);
    Route::get('/shopFlyers', [
        'uses' => 'ShopController@shopFlyers',
        'as' => 'shopFlyers',
    ]);
    Route::post('/Flyers', [
        'uses' => 'FormatController@FlyersFormat',
        'as' => 'Flyers',
    ]);
    Route::post('/Flyers', [
        'uses' => 'FormatController@FlyersFormat',
        'as' => 'Flyers',
    ]);
    Route::get('/account', [
        'uses' => 'FormatController@account',
        'as' => 'account',
    ]);
    Route::get('/verification', [
        'uses' => 'FormatController@verification',
        'as' => 'verification',
    ]);
    Route::get('/compositions', [
        'uses' => 'FormatController@compositions',
        'as' => 'compositions',
    ]);
    Route::get('/delay', [
        'uses' => 'FormatController@delay',
        'as' => 'delay',
    ]);
    Route::get('/utiles', [
        'uses' => 'FormatController@utiles',
        'as' => 'utiles',
    ]);
    Route::get('/contacts', [
        'uses' => 'FormatController@contacts',
        'as' => 'contacts',
    ]);
    Route::get('/payement', [
        'uses' => 'FormatController@payement',
        'as' => 'payement',
    ]);
    Route::get('/livraison', [
        'uses' => 'FormatController@livraison',
        'as' => 'livraison',
    ]);
  Route::get('/techniques', [
        'uses' => 'FormatController@techniques',
        'as' => 'techniques',
    ]);
 Route::get('/faq', [
        'uses' => 'FormatController@faq',
        'as' => 'faq',
    ]);

    Route::post('/changeAccount', [
        'uses' => 'FormatController@changeAccount',
        'as' => 'changeAccount',
    ]);
    Route::get('htmltopdfview', array('as' => 'htmltopdfview', 'uses' => 'FormatController@htmltopdfview'));
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/admin_panel', [
        'uses' => 'AdminControllers@admin',
        'as' => 'admin_panel',
    ]);
    Route::post('/login', [
        'uses' => 'AdminControllers@login',
        'as' => 'login',
    ]);
    Route::get('/Flyers_135_gr_satiné', [
        'uses' => 'AdminControllers@Flyers135',
        'as' => 'Flyers_135_gr_satiné',
    ]);
    Route::get('/delete_flyers_135_gr_satiné', [
        'uses' => 'EditController@deleteFlyers135',
        'as' => 'delete_flyers_135_gr_satiné',
    ]);
    Route::post('/add_Flyers_135_gr_satiné', [
        'uses' => 'EditController@addFlyers135',
        'as' => 'add_Flyers_135_gr_satiné',
    ]);
    Route::post('/urlsendIdFluyers135', [
        'uses' => 'EditController@getFlyers135',
        'as' => 'urlsendIdFluyers135',
    ]);
    Route::post('/edite_Flyers_135_gr_satiné', [
        'uses' => 'EditController@editFlyers135',
        'as' => 'edite_Flyers_135_gr_satiné',
    ]);
    Route::get('/flyers170_admin', [
        'uses' => 'AdminControllers@flyers170',
        'as' => 'flyers170_admin',
    ]);
    Route::get('/delete_flyers_170', [
        'uses' => 'EditController@deleteFlyers170',
        'as' => 'delete_flyers_170',
    ]);
    Route::post('/add_Flyers_170', [
        'uses' => 'EditController@addFlyers170',
        'as' => 'add_Flyers_170',
    ]);
    Route::post('/edite_Flyers170', [
        'uses' => 'EditController@editFlyers170',
        'as' => 'edite_Flyers170',
    ]);
    Route::post('/urlsendIdFluyers170', [
        'uses' => 'EditController@getFlyers170',
        'as' => 'urlsendIdFluyers170',
    ]);
    Route::get('/flyers250_admin', [
        'uses' => 'AdminControllers@flyers250',
        'as' => 'flyers250_admin',
    ]);
    Route::get('/delete_flyers250', [
        'uses' => 'EditController@deleteFlyers250',
        'as' => 'delete_flyers250',
    ]);
    Route::post('/add_flyers250', [
        'uses' => 'EditController@addFlyers250',
        'as' => 'add_flyers250',
    ]);
    Route::post('/edite_flyers250', [
        'uses' => 'EditController@editFlyers250',
        'as' => 'edite_flyers250',
    ]);
    Route::post('/urlsendIdFluyers250', [
        'uses' => 'EditController@getFlyers250',
        'as' => 'urlsendIdFluyers250',
    ]);
    Route::get('/flyers300_admin', [
        'uses' => 'AdminControllers@flyers300',
        'as' => 'flyers300_admin',
    ]);
    Route::post('/add_flyers300', [
        'uses' => 'EditController@addFlyers300',
        'as' => 'add_flyers300',
    ]);
    Route::post('/edite_flyers300', [
        'uses' => 'EditController@editflyers300',
        'as' => 'edite_flyers300',
    ]);
    Route::get('/delete_flyers300', [
        'uses' => 'EditController@deleteFlyers300',
        'as' => 'delete_flyers300',
    ]);
    Route::post('/urlsendIdFlyers300', [
        'uses' => 'EditController@getByIdFlyers300',
        'as' => 'urlsendIdFlyers300',
    ]);
    Route::get('/flyers300Plastic_admin', [
        'uses' => 'AdminControllers@flyers300Plastic',
        'as' => 'flyers300Plastic_admin',
    ]);
    Route::post('/edite_flyers300Plastic', [
        'uses' => 'EditController@editFlyers300Plastic',
        'as' => 'edite_flyers300Plastic',
    ]);
    Route::post('/addFlyers300Plastic', [
        'uses' => 'EditController@addFlyers300Plastic',
        'as' => 'addFlyers300Plastic',
    ]);
    Route::get('/delete_flyers300Plastic', [
        'uses' => 'EditController@deleteFlyers300Plastic',
        'as' => 'delete_flyers300Plastic',
    ]);
    Route::post('/urlsendIdFlyers300Plastic', [
        'uses' => 'EditController@getByIdFlyers300Plastic',
        'as' => 'urlsendIdFlyers300Plastic',
    ]);
    Route::get('/flyers300GrennLine_admin', [
        'uses' => 'AdminControllers@flyers300Greenline',
        'as' => 'flyers300GrennLine_admin',
    ]);

    Route::post('/add_flyers300Greenline', [
        'uses' => 'EditController@addFlyers300Greenline',
        'as' => 'add_flyers300Greenline',
    ]);
    Route::post('/edite_flyers300Greenline', [
        'uses' => 'EditController@editflyers300Greenline',
        'as' => 'edite_flyers300Greenline',
    ]);
    Route::get('/delete_flyers300Greenline', [
        'uses' => 'EditController@deleteFlyers300Greenline',
        'as' => 'delete_flyers300Greenline',
    ]);
    Route::post('/urlsendIdFlyers300Greenline', [
        'uses' => 'EditController@getByIdFlyers300Greenline',
        'as' => 'urlsendIdFlyers300Greenline',
    ]);
    Route::get('/flyers350_admin', [
        'uses' => 'AdminControllers@flyers350',
        'as' => 'flyers350_admin',
    ]);
    Route::post('/add_flyers350', [
        'uses' => 'EditController@addFlyers350',
        'as' => 'add_flyers350',
    ]);
    Route::post('/edite_flyers350', [
        'uses' => 'EditController@editflyers350',
        'as' => 'edite_flyers350',
    ]);
    Route::get('/delete_flyers350', [
        'uses' => 'EditController@deleteFlyers350',
        'as' => 'delete_flyers350',
    ]);
    Route::post('/urlsendIdFlyers350', [
        'uses' => 'EditController@getByIdFlyers350',
        'as' => 'urlsendIdFlyers350',
    ]);
    Route::get('/flyers350Brilant_admin', [
        'uses' => 'AdminControllers@flyers350Brilant',
        'as' => 'flyers350Brilant_admin',
    ]);
    Route::post('/add_flyers350Brilante', [
        'uses' => 'EditController@addFlyers350Brilante',
        'as' => 'add_flyers350Brilante',
    ]);
    Route::post('/edite_flyers350Brilante', [
        'uses' => 'EditController@editflyers350Brilante',
        'as' => 'edite_flyers350Brilante',
    ]);
    Route::get('/delete_flyers350Brilante', [
        'uses' => 'EditController@deleteFlyers350Brilante',
        'as' => 'delete_flyers350Brilante',
    ]);
    Route::post('/urlsendIdFlyers350Brilante', [
        'uses' => 'EditController@getByIdFlyers350Brilante',
        'as' => 'urlsendIdFlyers300Brilante',
    ]);
    Route::get('/flyers350Plastic_admin', [
        'uses' => 'AdminControllers@flyers350Plastic',
        'as' => 'flyers350Plastic_admin',
    ]);
    Route::post('/add_flyers350Plastic', [
        'uses' => 'EditController@addFlyers350Plastic',
        'as' => 'add_flyers350Plastic',
    ]);
    Route::post('/edite_flyers350Plastic', [
        'uses' => 'EditController@editflyers350Plastic',
        'as' => 'edite_flyers350Plastic',
    ]);
    Route::get('/delete_flyers350Plastic', [
        'uses' => 'EditController@deleteFlyers350Plastic',
        'as' => 'delete_flyers350Plastic',
    ]);
    Route::post('/urlsendIdFlyers350Plastic', [
        'uses' => 'EditController@getByIdFlyers350Plastic',
        'as' => 'urlsendIdFlyers300Plastic',
    ]);
});