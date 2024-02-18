<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AdminAbonnementController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClicontactController;
use App\Http\Controllers\EntraineurController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\GallerieController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PlanificationController;
use App\Http\Controllers\ClientraineurController;
use App\Http\Controllers\CliequipementController;
use App\Http\Controllers\CligallerieController;
use App\Http\Controllers\CliplanificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Models\Planification;

Route::get('/welcome', function () {
    return view ('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/entraineur/planification', [PlanificationController::class, 'planification'])->name('entraineur.planification')->middleware(['auth']);



Route::get('/home', [AccueilController::class, 'home'])->middleware(['auth', 'verified'])->name('home');

Route::get('/entraineurs', [ClientraineurController::class, 'indexentraineur'])->middleware(['auth', 'verified'])->name('entraineurs');
Route::get('/entraineurs/{id}', [ClientraineurController::class, 'show'])->middleware(['auth', 'verified'])->name('showentraineurs');

Route::get('/equipement', [CliequipementController::class, 'indexequipement'])->middleware(['auth', 'verified'])->name('equipements');

Route::get('/gallerie', [CligallerieController::class, 'indexgallerie'])->middleware(['auth', 'verified'])->name('galleries');

Route::get('/planification', [CliplanificationController::class, 'indexplanification'])->middleware(['auth', 'verified'])->name('planifications');

Route::get('/contacteznous', [ClicontactController::class, 'indexcontact'])->middleware(['auth', 'verified'])->name('contact');
Route::post('/contact', [ClicontactController::class, 'store'])->name('contact.store');

Route::get('/abonnements', [AbonnementController::class, 'index'])->middleware(['auth', 'verified'])->name('abonnements');
Route::post('/abonnement/store/{typeAbonnement}', [AbonnementController::class, 'store'])->name('store');
Route::get('/confirmation', [AbonnementController::class, 'show'])->name('confirmation');
Route::get('/process-payment/{typeAbonnement}/{dateDebut}', [AbonnementController::class, 'processPayment'])->name('process.payment');
Route::get('/historique-abonnements', [AbonnementController::class, 'historique'])->name('historique.abonnements')->middleware(['auth', 'verified']);






Route::get('/contact/messages', [ContactMessageController::class, 'messages'])->name('admin.contact.messages')->middleware(['auth', 'verified']);

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware(['auth', 'verified']);

Route::get('admin/abonnements', [AdminAbonnementController::class, 'index'])->name('admin.abonnements.index')->middleware(['auth']);

Route::get('admin/planification', [PlanificationController::class, 'index'])->name('admin.planifications.index');
Route::get('admin/planifications/create', [PlanificationController::class, 'create'])->name('admin.planifications.create'); 
Route::post('admin/planifications', [PlanificationController::class, 'store'])->name('planifications.store');
Route::get('admin/planifications/{planification}/edit', [PlanificationController::class, 'edit'])->name('admin.planifications.edit');
Route::put('admin/planifications/{planification}', [PlanificationController::class, 'update'])->name('planifications.update');
Route::delete('planifications/{planification}', [PlanificationController::class, 'destroy'])->name('planifications.destroy');

Route::get('admin/entraineurs', [EntraineurController::class, 'index'])->name('admin.entraineurs.index');
Route::get('admin/entraineurs/create', [EntraineurController::class, 'create'])->name('admin.entraineurs.create');
Route::post('admin/entraineurs', [EntraineurController::class, 'store'])->name('entraineurs.store');
Route::get('admin/entraineurs/{entraineur}', [EntraineurController::class, 'show'])->name('admin.entraineurs.show');
Route::get('admin/entraineurs/{entraineur}/edit', [EntraineurController::class, 'edit'])->name('admin.entraineurs.edit');
Route::put('/admin/entraineurs/{entraineur}', [EntraineurController::class, 'update'])->name('entraineurs.update');
Route::delete('/admin/entraineurs/{entraineur}', [EntraineurController::class, 'destroy'])->name('entraineurs.destroy');
Route::get('entraineurs/getByCours', [EntraineurController::class, 'getByCours'])->name('entraineurs.getByCours');

Route::get('/admin/cours',  [CoursController::class,'index'])->name('admin.cours.index');
Route::get('/admin/cours/ajouter', [CoursController::class,'create'])->name('cours.create');    
Route::post('/admin/cours',  [CoursController::class,'store'])->name('cours.store');    
Route::get('/admin/cours/{cours}/modifier',  [CoursController::class,'edit' ])->name('cours.edit');  
Route::patch('/cours/{cours}', [CoursController::class,'update'])->name('cours.update');
Route::delete('/cours/{cours}',  [CoursController::class,'destroy'])->name('cours.destroy');

Route::get('/admin/equipement', [EquipementController::class, 'index'])->name('admin.equipement.index');
Route::get('/admin/equipement/create', [EquipementController::class, 'create'])->name('admin.equipement.create');
Route::post('/admin/equipement',  [EquipementController::class,'store'])->name('admin.equipement.store');    
Route::delete('/admin/equipement/{equipement}', [EquipementController::class, 'destroy'])->name('admin.equipement.destroy');
Route::get('/admin/equipement/{equipement}', [EquipementController::class, 'show'])->name('admin.equipement.show');

Route::get('/admin/galleries', [GallerieController::class, 'index'])->name('admin.galleries.index');
Route::get('/admin/galleries/create', [GallerieController::class, 'create'])->name('admin.galleries.create');
Route::post('/admin/galleries', [GallerieController::class, 'store'])->name('galleries.store');
Route::delete('/admin/galleries/{id}', [GallerieController::class, 'destroy'])->name('galleries.destroy');
Route::get('/admin/galleries/{id}', [GallerieController::class, 'show'])->name('galleries.show');

Route::get('/admin/clients', [ClientController::class, 'index'])->name('admin.client.index');
Route::get('/admin/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
Route::delete('/admin/clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');




require __DIR__ . '/auth.php';






