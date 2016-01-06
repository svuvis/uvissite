<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PublicController@index');
    Route::get('/activiteiten', 'PublicController@activiteiten');
    Route::get('/bestuur', 'PublicController@bestuur');
    Route::get('/inschrijven', 'PublicController@inschrijven');
    Route::get('/beta', 'PublicController@beta');
    Route::get('/overuvis', 'PublicController@overuvis');
    Route::get('/agenda', 'PublicController@agenda');
    Route::get('/inschrijven2', 'PublicController@inschrijven2');
    Route::get('/bestuur2', 'PublicController@bestuur2');
    Route::get('/commissies', 'PublicController@commissies');
    Route::get('/onzesponsors', 'PublicController@onzesponsors');
    Route::get('/media/2014', 'PublicController@tweeduizendveertien');
    Route::get('/media/2015', 'PublicController@tweeduizendvijftien');
    Route::get('/media/2014/whatthehack', 'PublicController@whatthehack');
    Route::get('/media/2015/nerdsinvegas', 'PublicController@nerdsinvegas');
    Route::get('/media', 'PublicController@media');
    Route::get('/oudefotos', 'PublicController@oudefotos');
    Route::get('/vacatures', 'PublicController@vacatures');
    Route::get('/vacatures/ogdhelpdeskmedewerker', 'PublicController@ogdhelpdeskmedewerker');
    Route::get('/vacatures/ogdsoftwareontwikkelaar', 'PublicController@ogdsoftwareontwikkelaar');
    Route::get('/vacatures/keylaneappsenfrontendtechnologie', 'PublicController@keylaneappsenfrontendtechnologie');
    Route::get('/vacatures/keylanewerkenmetfinancielegegevens', 'PublicController@keylanewerkenmetfinancielegegevens');
    Route::get('/vacatures/qienittraineeship', 'PublicController@qienittraineeship');
    Route::get('/vacatures/qienittraineeshipalgemeen', 'PublicController@qienittraineeshipalgemeen');
    Route::get('/vacatures/keylanebigdata', 'PublicController@keylanebigdata');
    Route::get('/vacatures/keylaneoverige', 'PublicController@keylaneoverige');
    Route::resource('vacature','VacturesController');
    Route::resource('bedrijfsprofiel','BedrijfsprofielenController');
    Route::auth();
    Route::get('/admin','AdminController@index');
    Route::post('/admin/upload','AdminController@upload');
});

