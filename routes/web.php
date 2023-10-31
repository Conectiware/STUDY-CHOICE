<?php

use App\Http\Controllers\FiliereController;
use App\Http\Controllers\EcoleController;
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



Route::get('/', 'FiliereController@showAcceuil')->name('acceuil');




/*Route::get('/form', function () {
    return view('formulaire');
})->name('form'); */

Route::get('/developpement', function () {
    return view('dev');
})->name('developpement');

Route::get('/layout', function () {
    return view('main');
})->name('layout');
Route::get('/trade', function () {
    return view('ci');
})->name('trade');
Route::get('/fi', function () {
    return view('finance');
})->name('fi');
Route::get('/gestion', function () {
    return view('ge');
})->name('gestion');
Route::get('/md', function () {
    return view('marketing');
})->name('md');
Route::get('/ressources', function () {
    return view('rh');
})->name('ressources');

Route::get('/conn', function () {
    return view('connexion');
})->name('conn');

Route::get('/addform', function () {
    return view('add_pages.addfor');
})->name('addform');
Route::get('/add_school', function () {
    return view('add_pages.addschool');
})->name('add_school');




//routes protégées 



Route::group(['middleware' => ['auth','admin']], function (){
    Route::get('/dash', function () {
        return view('layouts.main');
    })->name('dash');
});

/* Routes des controlleurs*/ 



Route::get('auth/google', 'GoogleAuthController@redirect')->name('google-auth');
Route::get('auth/google/call-back/', 'GoogleAuthController@callbackGoogle');
Route::get('/ecoles', 'EcoleController@showEcoles')->name('ecoles');
Route::get('/users', 'UserController@ShowUser')->name('users');
Route::get('/formation', 'FormationController@ShowFormation')->name('formation');
Route::post('/addformation', 'FormationController@addformation')->name('addformation');
Route::get('/inscrit', 'UserController@ShowInscription')->name('inscrit');
Route::get('/admin-users', 'UserController@showAdminUsers')->name('admin.users');
Route::post('/addecole', 'EcoleController@addecoles')->name('addecole');
Route::post('/addcandidature', 'Admin\CandidatureController@store')->name('addcandidature');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'FormationController@search')->name('formations.search');

Auth::routes();

// contact
Route::get('contact', 'ContactController@create')->name('form');
Route::post('contact', 'ContactController@store')->name('store');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/candidatures', 'Admin\CandidatureController');
Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
    'index', 'show', 'destroy'
]);
Route::resource('admin/settings', 'Admin\SettingsController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

Route::resource('admin/écoles', 'EcoleController\ÉcolesController');