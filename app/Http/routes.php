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
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/Flyers.135.gr.satiné', [
        'uses' => 'HomeController@Flyers135',
        'as' => 'Flyers.135.gr.satiné',

    ]);
    Route::get('/shopFlyers135', [
        'uses' => 'ShopController@shopFlyers135',
        'as' => 'shopFlyers135',

    ]);
    route::get('/shop', [
        'uses' => 'ShopController@shop',
        'as' => 'shop',

    ]);
    Route::get('/shopFlyers170', [
        'uses' => 'ShopController@shopFlyers170',
        'as' => 'shopFlyers170',

    ]);
    Route::post('/Flyers', [
        'uses' => 'FormatController@FlyersFormat',
        'as' => 'Flyers',

    ]);
    Route::get('/Flyers170', [
        'uses' => 'HomeController@Flyers170',
        'as' => 'flyers170',

    ]);
    Route::post('/urlForFormat170', [
        'uses' => 'FormatController@Flyers170Select',
        'as' => 'urlForFormat170',
    ]);
    Route::get('/flyers250', [
        'uses' => 'HomeController@flyers250',
        'as' => 'flyers250',
    ]);
    Route::get('/shopFlyers250', [
        'uses' => 'ShopController@shopFlyers250',
        'as' => 'shopFlyers250',
    ]);
    Route::post('/urlForFormat250', [
        'uses' => 'FormatController@Flyers250Select',
        'as' => 'urlForFormat250',
    ]);
    Route::get('/flyers300_plastic', [
        'uses' => 'HomeController@flyers300_plastic',
        'as' => 'flyers300_plastic',

    ]);

    Route::get('/shopFlyers300_plastic', [
        'uses' => 'ShopController@shopFlyers300Plastic',
        'as' => 'shopFlyers300_plastic',
    ]);
    Route::post('/urlForFormat300PlasticSelect', [
        'uses' => 'FormatController@Flyers300PlasticSelect',
        'as' => 'urlForFormat300PlasticSelect',
    ]);
    Route::get('/flyers300', [
        'uses' => 'HomeController@flyers300',
        'as' => 'flyers300',
    ]);
    Route::get('/shopFlyers300', [
        'uses' => 'ShopController@shopFlyers300',
        'as' => 'shopFlyers300',
    ]);
    Route::post('/Flyers300Select', [
        'uses' => 'FormatController@Flyers300Select',
        'as' => 'Flyers300Select',
    ]);
    Route::get('/flyers300_greenLine', [
        'uses' => 'HomeController@flyers300_greenLine',
        'as' => 'flyers300_greenLine',

    ]);
    Route::get('/shopFlyers300GreenLine', [
        'uses' => 'ShopController@shopFlyers300GreenLine',
        'as' => 'shopFlyers300GreenLine',
    ]);
    Route::post('/Flyers300GreenLineSelect', [
        'uses' => 'FormatController@Flyers300GreenLineSelect',
        'as' => 'Flyers300GreenLineSelect',
    ]);
    Route::get('/flyers350', [
        'uses' => 'HomeController@flyers350',
        'as' => 'flyers350',

    ]);
    Route::get('/shopFlyers350', [
        'uses' => 'ShopController@shopFlyers350',
        'as' => 'shopFlyers350',
    ]);
    Route::post('/urlFlyers350Select', [
        'uses' => 'FormatController@Flyers350Select',
        'as' => 'urlFlyers350Select',
    ]);
    Route::get('/flyers350_brilant', [
        'uses' => 'HomeController@flyers350_brilant',
        'as' => 'flyers350_brilant',

    ]);
    Route::get('/shopFlyers350_brilant', [
        'uses' => 'ShopController@shopFlyers350Brilant',
        'as' => 'shopFlyers350_brilant',
    ]);
    Route::post('/urlFlyers350Brilante', [
        'uses' => 'FormatController@Flyers350BrilanteFormatSelect',
        'as' => 'urlFlyers350Brilante',
    ]);
    Route::get('/flyers350_plastic', [
        'uses' => 'HomeController@flyers350_plastic',
        'as' => 'flyers350_plastic',

    ]);
    Route::get('/shopFlyers350_plastic', [
        'uses' => 'ShopController@shopFlyers350Plastic',
        'as' => 'shopFlyers350_plastic',
    ]);
    Route::post('/urlFlyers350Platic', [
        'uses' => 'FormatController@Flyers350PlaticFormatSelect',
        'as' => 'urlFlyers350Platic',
    ]);
    Route::get('/Affiches135', [
        'uses' => 'HomeController@Affiches135',
        'as' => 'Affiches135',

    ]);
    Route::get('/shopAffiches135', [
        'uses' => 'ShopController@shopAffiches135',
        'as' => 'shopAffiches135',
    ]);
    Route::post('/urlAffiches135FormatSelect', [
        'uses' => 'FormatController@Affiches135FormatSelect',
        'as' => 'urlAffiches135FormatSelect',
    ]);
    Route::get('/affiches1', [
        'uses' => 'HomeController@affiches1',
        'as' => 'affiches1',

    ]);
    Route::post('/urlAffiches1FormatSelect', [
        'uses' => 'FormatController@Affiches1FormatSelect',
        'as' => 'urlAffiches1FormatSelect',
    ]);
    Route::get('/shopAffiches1', [
        'uses' => 'ShopController@shopAffiches1',
        'as' => 'shopAffiches1',
    ]);
    Route::get('/Affiches_grand', [
        'uses' => 'HomeController@Affiches_grand',
        'as' => 'Affiches_grand',

    ]);
    Route::get('/shopAffichesGrand', [
        'uses' => 'ShopController@shopAffichesGrand',
        'as' => 'shopAffichesGrand',

    ]);
    Route::post('/urlAffichesGrandFormatSelect', [
        'uses' => 'FormatController@AffichesGrandFormatSelect',
        'as' => 'urlAffichesGrandFormatSelect',
    ]);
    Route::get('/affiche_digitale', [
        'uses' => 'HomeController@affiche_digitale',
        'as' => 'affiche_digitale',
    ]);
    Route::get('/shopAfficheDigitale', [
        'uses' => 'ShopController@shopAfficheDigitale',
        'as' => 'shopAfficheDigitale',
    ]);
    Route::post('/urlAffichesDigitaleFormatSelect', [
        'uses' => 'FormatController@AffichesDigitaleFormatSelect',
        'as' => 'urlAffichesDigitaleFormatSelect',
    ]);


    Route::get('/affiches_green', [
        'uses' => 'HomeController@affiches_green',
        'as' => 'affiches_green',
    ]);

    Route::get('/shopAffichesGreen', [
        'uses' => 'ShopController@shopAffichesGreen',
        'as' => 'shopAffichesGreen',
    ]);
    Route::post('/urlAffichesGreenFormatSelect', [
        'uses' => 'FormatController@AffichesGreenFormatSelect',
        'as' => 'urlAffichesGreenFormatSelect',
    ]);

    Route::get('/affiches_recto', [
        'uses' => 'HomeController@affiches_recto',
        'as' => 'affiches_recto',

    ]);
    Route::get('/shopAffichesRecto', [
        'uses' => 'ShopController@shopAffichesRecto',
        'as' => 'shopAffichesRecto',
    ]);
    Route::post('/urlAffichesRectoFormatSelect', [
        'uses' => 'FormatController@AffichesGreenFormatSelect',
        'as' => 'urlAffichesRectoFormatSelect',
    ]);
    Route::get('/dépliants135', [
        'uses' => 'HomeController@dépliants135',
        'as' => 'dépliants135',

    ]);
    Route::get('/shopDépliants135', [
        'uses' => 'ShopController@shopDépliants135',
        'as' => 'shopDépliants135',
    ]);
    Route::post('/urlDepliants135FormatSelect', [
        'uses' => 'FormatController@Dépliants135FormatSelect',
        'as' => 'urlDepliants135FormatSelect',
    ]);
    Route::get('/carte_visite_brillante', [
        'uses' => 'HomeController@carte_visite_brillante',
        'as' => 'carte_visite_brillante',

    ]);
    Route::get('/shopCarteVisiteBrillante', [
        'uses' => 'ShopController@shopCarteVisiteBrillante',
        'as' => 'shopCarteVisiteBrillante',
    ]);
    Route::post('/urlCarteVisiteBrillante', [
        'uses' => 'FormatController@carteVisiteBrillanteFormatSelect',
        'as' => 'urlCarteVisiteBrillante',
    ]);
    Route::get('/carte_visite_matte', [
        'uses' => 'HomeController@carte_visite_matte',
        'as' => 'carte_visite_matte',

    ]);
    Route::get('/shopCarteVisiteMatte', [
        'uses' => 'ShopController@shopCarteVisiteMatte',
        'as' => 'shopCarteVisiteMatte',
    ]);
    Route::post('/urlCarteVisiteMatte', [
        'uses' => 'FormatController@carteVisiteMatteFormatSelect',
        'as' => 'urlCarteVisiteMatte',
    ]);
    Route::get('/carte_visite_green', [
        'uses' => 'HomeController@carte_visite_green',
        'as' => 'carte_visite_green',

    ]);
    Route::post('/urlCarteVisiteGreenFormatSelect', [
        'uses' => 'FormatController@carteVisiteGreenFormatSelect',
        'as' => 'urlCarteVisiteGreenFormatSelect',
    ]);
    Route::get('/shopCarteVisiteGreen', [
        'uses' => 'ShopController@shopCarteVisiteGreen',
        'as' => 'shopCarteVisiteGreen',
    ]);
    Route::get('/carte_300', [
        'uses' => 'HomeController@carte_300',
        'as' => 'carte_300',

    ]);
    Route::get('/shopCarte300', [
        'uses' => 'ShopController@shopCarte300',
        'as' => 'shopCarte300',
    ]);
    Route::post('/urlCarte300FormatSelect', [
        'uses' => 'FormatController@carte300FormatSelect',
        'as' => 'urlCarte300FormatSelect',
    ]);

    Route::get('/carte_deluxe', [
        'uses' => 'HomeController@carte_deluxe',
        'as' => 'carte_deluxe',

    ]);
    Route::get('/shopCarteDeluxe', [
        'uses' => 'ShopController@shopCarteDeluxe',
        'as' => 'shopCarteDeluxe',
    ]);
    Route::post('/urlCarteDeluxeFormatSelect', [
        'uses' => 'FormatController@CarteDeluxeFormatSelect',
        'as' => 'urlCarteDeluxeFormatSelect',
    ]);
    Route::get('/carte350', [
        'uses' => 'HomeController@carte350',
        'as' => 'carte350',

    ]);

    Route::get('/carte310', [
        'uses' => 'HomeController@carte310',
        'as' => 'carte310',

    ]);
    Route::get('/panneaux_plats_4', [
        'uses' => 'HomeController@panneaux_plats_4',
        'as' => 'panneaux_plats_4',
    ]);
    Route::get('/panneaux_pyramid_4', [
        'uses' => 'HomeController@panneaux_pyramid_4',
        'as' => 'panneaux_pyramid_4',
    ]);
    Route::get('/panneaux_fléchage_4', [
        'uses' => 'HomeController@panneaux_fléchage_4',
        'as' => 'panneaux_fléchage_4',
    ]);
    Route::get('/roll_up', [
        'uses' => 'HomeController@roll_up',
        'as' => 'roll_up',
    ]);
    Route::get('/vinyle_autocollant', [
        'uses' => 'HomeController@vinyle_autocollant',
        'as' => 'vinyle_autocollant',
    ]);
    Route::get('/vinyle_autocollant_rond', [
        'uses' => 'HomeController@vinyle_autocollant_rond',
        'as' => 'vinyle_autocollant_rond',
    ]);

    Route::get('/vinyle_autocollant_grand', [
        'uses' => 'HomeController@vinyle_autocollant_grand',
        'as' => 'vinyle_autocollant_grand',
    ]);

    Route::get('/brochures_A6', [
        'uses' => 'HomeController@brochures_A6',
        'as' => 'brochures_A6',
    ]);

    Route::get('/brochures_A5', [
        'uses' => 'HomeController@brochures_A5',
        'as' => 'brochures_A5',
    ]);
    Route::get('/brochures_a4', [
        'uses' => 'HomeController@brochures_a4',
        'as' => 'brochures_a4',
    ]);

    Route::get('/brochures_a4_170', [
        'uses' => 'HomeController@brochures_a4_170',
        'as' => 'brochures_a4_170',
    ]);

    Route::get('/Reliure_135', [
        'uses' => 'HomeController@Reliure_135',
        'as' => 'Reliure_135',
    ]);

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