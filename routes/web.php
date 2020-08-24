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
Route::get('/', 'IndexController@index');
Route::get('/Abonnement', 'IndexController@abonnement');
Route::get('/Contact', 'IndexController@contact');
Route::get('/Points_de_ventes', 'localisationController@index');
Route::get('/Cahier_de_charge', 'IndexController@Cahier_de_charge');
Route::get('/tarif', 'IndexController@tarif');

Route::get('/home2', 'PanelController@home');
Route::get('/importeannonce', 'Adminelte@annonce')->middleware('permission:Importation');
Auth::routes();
Route::get('/home', 'Adminelte@dashboard');
Route::post('file-import', 'AnnonceController@Import')->name('file-import')->middleware('permission:Importation');
Route::get('/importeannonceur', 'Adminelte@annonceur')->middleware('permission:Importation');
Route::post('fileimport', 'AnnonceurController@fileImport')->name('fileimport')->middleware('permission:Importation');
Route::get('/archiveannonce', 'Adminelte@archive')->middleware('permission:Archive');
Route::post('archive', 'AnnonceController@archive')->name('archive')->middleware('permission:Archive');
Route::get('/adminslist', 'AdminController@index')->middleware('permission:Role');
Route::resource('admins', 'AdminController')->middleware('permission:Role');
Route::get('nouveauadmin', 'RoleController@show')->middleware('permission:Role');
Route::POST('create_admine', 'RoleController@create')->name('create_admine')->middleware('permission:Role');
Route::get('searchannonce', 'SearchController@show')->middleware('permission:Annonnces');
Route::get('searchresult', 'SearchController@search')->name('searchresult')->middleware('permission:Annonnces');
Route::resource('details', 'ApercuController');
Route::resource('details.destroy', 'ApercuController@destroy')->middleware('permission: supression_placard');
Route::resource('detailarchive', 'ApercuaController');
Route::resource('detailarchive.destroy', 'ApercuaController@destroy')->middleware('permission: supression_placard');
Route::get('searcharchive', 'SearchaController@show')->middleware('permission:Annonnces');
Route::get('searchresultarchive', 'SearchaController@search')->name('searchresultarchive')->middleware('permission:Annonnces');

Route::get('admin', function () {
    return view('superadmin.dashboard.v1');
});

Route::get('admin2', function () {
    return view('superadmin.importation.resultat');
});

Route::get('admin/{name?}', 'Controller@showView');