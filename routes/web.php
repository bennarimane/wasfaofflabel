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
Route::get('/',['uses' => 'PrescriptionController@accueil','as' => 'accueil']);
Route::get('prescriptions/liste',['uses' => 'PrescriptionController@liste','as' => 'liste']);
Route::get('prescriptions/{id}', 'PrescriptionController@details');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();



Route::post('/home',['uses' => 'LoginController@login','as' => 'login.custom']);
Route::group(['middleware'=>'auth'],function(){

Route::get('/profiles/{id}',['uses' => 'ProfilesController@index','as' => 'profile']);
Route::get('/professionnel/edit',['uses' => 'ProfilesController@edit','as' => 'profile.edit']);
Route::post('/professionnel/update',['uses' => 'ProfilesController@update','as' => 'profile.update']);
Route::get('/liste/refus/{id}',['uses' => 'ProfilesController@refuser','as' => 'profile.refus']);
Route::get('/professionnel/changepassword',['uses' => 'ProfilesController@changePasswordForm','as' => 'changepassword']);


Route::get('modifier/prescription/{id}', 'PrescriptionController@edit');
Route::get('/prescriptions/filtrage/creaire',['uses' => 'PrescriptionController@recherchetype','as' => 'type']);
Route::get('posts', 'PostController@create');
Route::get('/avis', 'PostController@list');
Route::get('/avis/list', 'AdminController@list');
Route::get('/admin/avis/details/{id}', 'AdminController@show_details');
Route::get('/avis/details/{id}', 'PostController@show_details');

Route::post('posts',['uses' => 'PostController@store','as' => 'posts.store']);
Route::get('/ajouter/presciprion',['uses' => 'PrescriptionController@create','as' => 'ajouter.prescription']);
Route::post('nouvelle/prescription',['uses' => 'PrescriptionController@store','as' => 'prescription.store']);
Route::get('/dashboard',function(){return view('admin.dashboard');})->name('dashboard');
Route::get('/admin/active_deactive_user/{id}', 'AdminController@active_deactive_user');

Route::get('/admin/modifier_pres/{id}', 'AdminController@edit_pres');
Route::post('/ajouter/motif/{id}',['uses' => 'AdminController@store','as' => 'motif.store']);

Route::get('/admin/utilisateurs', 'AdminController@affichage');
Route::get('/details_user/{id}', 'AdminController@show');
Route::get('/valider/prescription/{id}', 'PrescriptionController@valide');
Route::post('ajour/prescription/{id}',['uses' => 'AdminController@update_pres','as' => 'prescription.update_pres']);
Route::post('/avis/proposition/{id}',['uses' => 'PostController@store_prop','as' => 'proposition.store']);
Route::get('/admin/demandes', 'AdminController@valide');
Route::get('/admin/prescriptions', 'AdminController@liste');

//Route::get('/proposition', 'PostController@liste');
Route::get('/admin/prescriptions/{id}', 'AdminController@details');
Route::get('/admin/prescriptions/forvalidation/{id}', 'AdminController@validation');
Route::get('/admin/active_deactive_pres/{id}', 'AdminController@active_deactive_pres');
Route::post('/transfer/demande/prescription{id}',['uses' => 'AdminController@transfer','as' => 'transfer.store']);
Route::post('/ajouter/commentaire/{id}',['uses' => 'CommentaireController@store','as' => 'commentaire.store']);
Route::delete('/com/{id}', 'AdminController@destroyCom');
Route::get('/admin/active_presc/{id}', 'AdminController@valide_pres');
Route::get('/admin/supprimer/{id}', 'AdminController@supprimer');
Route::delete('/pres/{id}', 'AdminController@destroyPres');
Route::get('/dash', function () {
    return view('admin.adminpanel');
});


Route::get('/details_user', function () {
    return view('admin.details_user');
});


Route::get('demande/aide',['uses' => 'PrescriptionController@aide','as' => 'aide']);


});

Route::get("addmore/","ProductAddMoreController@addMore");
Route::post("addmore/","ProductAddMoreController@addMorePost")->name('addmorePost');
Route::get('/rechercher/prescription',['uses' => 'PrescriptionController@barrerecherche','as' => 'recherche']);