<?php

use App\Http\Controllers\Annonce\AnnonceController;
use App\Http\Controllers\Association\AssociationController;
use App\Http\Controllers\Entreprise\EntrepriseController;
use App\Http\Controllers\Etudiant\EtudiantController;
use App\Http\Controllers\Feusseul\FeusseulController;
use App\Http\Controllers\Xamxam\XamxamController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registerstudent', [RegisterController::class, 'registerstudent'])->name('registerstudent');
Route::get('/registercompany', [RegisterController::class, 'registercompany'])->name('registercompany');
Route::get('/registerassociation', [RegisterController::class, 'registerassociation'])->name('registerassociation');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ROUTES FOR XAM XAM CRUD
Route::get('/xamxam', [XamxamController::class, 'index'])->name('xamxam.index');
Route::get('/xamxam/show/{id}', [XamxamController::class, 'show'])->name('xamxam.show');
Route::get('/xamxam/create', [XamxamController::class, 'create'])->name('xamxam.create');
Route::post('/xamxam', [XamxamController::class, 'store'])->name("xamxa.store");
Route::get('/xamxam/edit/{id}', [XamxamController::class, 'edit'])->name('xamxam.edit');
Route::post('/xamxam/update/{id}', [XamxamController::class, 'update'])->name('xamxam.update');
Route::get('/xamxam/destroy/{id}', [XamxamController::class, 'destroy'])->name('xamxam.destroy');


//ROUTE FOR ASSOCATION PROFILE
Route::get('/association/edit/{id}', [AssociationController::class, 'edit'])->name('association.edit');
Route::get('/association/update/{id}', [AssociationController::class, 'update'])->name('association.update');
Route::post('/association/update/{id}', [AssociationController::class, 'update'])->name('association.updated');
Route::get('/Association/editAvatar/{id}', [AssociationController::class, 'editAvatar'])->name('association.editAvatar');
Route::post('/Association/UpdateAvatar/{id}', [AssociationController::class, 'updateAvatar'])->name('association.updateAvatar');



//ROUTE FOR ENTREPRISE
Route::get('/Entreprise/editAvatar/{id}',[EntrepriseController::class, 'editAvatar'])->name('Entreprise.EditAvatar');
Route::post('/Entreprise/updateAvatar/{id}', [EntrepriseController::class, 'updateAvatar'])->name('Entreprise.updateAvatar');


//ROUTE FOR ALL USERS
//ROUTE FOR XAMXAM
Route::get('/xamxams', [XamxamController::class, 'xamxamAll'])->name('xamxamAll');


Route::get('/Etudiant/edit/{id}', [EtudiantController::class, 'edit'])->name('Etudiant.edit');
Route::post('/Etudiant/update/{id}', [EtudiantController::class, 'update'])->name('Etudiant.update');


//ROUTE FOR CREATING ANNONCES
Route::get('/Annonce', [AnnonceController::class, 'index'])->name('Annonce.user');
Route::get('/Annonces', [AnnonceController::class, 'displayAll'])->name('Annonce.all');
Route::get('/Annonce/Create', [AnnonceController::class, 'create'])->name('Annonce.create');
Route::post('/Annonce/Store', [AnnonceController::class, 'store'])->name('Annonce.store');
Route::get('/Annonce/Edit/{id}', [AnnonceController::class, 'edit'])->name('Annonce.edit');
Route::post('/Annonce/Update/{id}', [AnnonceController::class, 'update'])->name('Annonce.update');
Route::get('/Annonces/Show/{id}', [AnnonceController::class, 'show'])->name('annonce.show');
Route::get('/Annonce/Delete/{id}', [AnnonceController::class, 'destroy'])->name('Annonce.destroy');
Route::delete('/Annonce/Delete/{id}', [AnnonceController::class, 'destroy'])->name('Annonce.destroy');
Route::get('/Annonce/{id}', [AnnonceController::class, 'showAnnonce'])->name('Annonce.showAnnonce');
Route::post('/Annonce/interesse/{id}', [AnnonceController::class, 'interesses'])->name('Annonce.interesse');

//ROUTE FOR ETUDIANT PROFILE
Route::get('/etudiant/edit/{id}', [EtudiantController::class, 'edit'])->name('association.edit');
Route::get('/etudiant/update/{id}', [EtudiantController::class, 'update'])->name('association.update');
Route::post('/etudiant/update/{id}', [EtudiantController::class, 'update'])->name('association.updated');
Route::get('/Etudiant/editAvatar/{id}', [EtudiantController::class, 'editAvatar'])->name('Etudiant.editAvatar');
Route::post('/Etudiant/UpdateAvatar/{id}', [EtudiantController::class, 'updateAvatar'])->name('Etudiant.updateAvatar');


//ROUTE FRO FEUSSEUL
Route::get('/Feusseul', [FeusseulController::class, 'index'])->name('Feusseul.index');
Route::get('/Feusseul/create', [FeusseulController::class, 'create'])->name('Feusseul.create');
Route::post('/Feusseul/Store', [FeusseulController::class, 'store'])->name('Feusseul.store');
Route::get('/Feusseul/Show/{id}', [FeusseulController::class, 'show'])->name('Feusseul.show');
Route::get('/Feusseul/Edit/{id}', [FeusseulController::class, 'edit'])->name('Feusseul.edit');
Route::get('/Feusseuls', [FeusseulController::class, 'displayAll'])->name('Feusseul.displayAll');
Route::post('/Feusseul/Update/{id}', [FeusseulController::class, 'update'])->name('Feusseul.update');
Route::get('/Feusseul/Delete/{id}', [FeusseulController::class, 'destroy'])->name('Feusseul.delete');
Route::post('/Feusseul/Delete/{id}', [FeusseulController::class, 'destroy'])->name('Feusseul.deleted');
