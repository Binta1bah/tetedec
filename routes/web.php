<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Auth\AgentAuthController;
use App\Http\Controllers\ContribuableController;
use App\Http\Controllers\DeclarationController;
use App\Http\Controllers\ImpotController;
use App\Http\Controllers\PaiementController;



Route::post('/agent/login', [AgentAuthController::class, 'login'])->name('login');

    
Route::group(['middleware' => ['auth:agent']], function() {


    Route::post('/agents', [AgentController::class, 'store'])->name('agents.store');

    Route::post('/agent/logout', [AgentAuthController::class, 'logout'])->name('logout');
    
    Route::post('/declarations', [DeclarationController::class, 'store'])->name('declarations.store');
    Route::delete('/contribuables/{contribuable}', [DeclarationController::class, 'destroy'])->name('declarations.destroy');
    Route::post('/paiements', [PaiementController::class, 'store'])->name('paiements.store');
    Route::get('/dashboard', function () {
        return view('layout.index');
    })->name('dashboard');


    
    Route::get('/agents', [AgentController::class, 'index'])->name('agents.index');
    Route::delete('/agents/{agent}', [AgentController::class, 'destroy'])->name('agents.destroy');
    Route::get('/agents/{agent}/edit', [AgentController::class, 'edit'])->name('agents.edit');
    Route::put('/agents/{agent}', [AgentController::class, 'update'])->name('agents.update');

    //Route Contribuable
    Route::get('/contribuables', [ContribuableController::class, 'index'])->name('contribuables.index');
    Route::post('/contribuables', [ContribuableController::class, 'store'])->name('contribuables.store');
    Route::delete('/contribuables/{contribuable}', [ContribuableController::class, 'destroy'])->name('contribuables.delete');
    Route::get('/contribuables/{contribuable}/edit', [ContribuableController::class, 'edit'])->name('contribuables.edit');
    Route::put('/contribuables/{contribuable}', [ContribuableController::class, 'update'])->name('contribuables.update');

    // Route declaration
    Route::get('/declarations', [DeclarationController::class, 'index'])->name('declarations.index');
    Route::post('/declarations', [DeclarationController::class, 'store'])->name('declarations.store');
    Route::get('/declarationsContri', [DeclarationController::class, 'contribuable'])->name('declarations.contri');
    Route::delete('/declarations/{declaration}', [DeclarationController::class, 'destroy'])->name('declarations.destroy');
    Route::get('/declarations/{declaration}/edit', [DeclarationController::class, 'edit'])->name('declarations.edit');
    Route::put('/declarations/{declaration}', [DeclarationController::class, 'update'])->name('declarations.update');

    //Route impot
    Route::get('/impots', [ImpotController::class, 'index'])->name('impots.index');
    Route::post('/impots', [ImpotController::class, 'store'])->name('impots.store');
    Route::get('/impotAjout', [ImpotController::class, 'declaration'])->name('impot.ajout');
    Route::delete('/impots/{impot}', [ImpotController::class, 'destroy'])->name('impots.destroy');
    Route::get('/impots/{impot}/edit', [ImpotController::class, 'edit'])->name('impots.edit');
    Route::put('/impot/{impot}', [ImpotController::class, 'update'])->name('impots.update');

    //Route paiement
    Route::get('/paiements', [PaiementController::class, 'index'])->name('paiements.index');
    Route::post('/paiements', [PaiementController::class, 'store'])->name('paiements.store');
    Route::get('/paiementAjout', [PaiementController::class, 'contribuable'])->name('paiement.ajout');
    Route::delete('/paiements/{paiement}', [PaiementController::class, 'destroy'])->name('paiements.destroy');
    Route::get('/paiements/{paiement}/edit', [PaiementController::class, 'edit'])->name('paiements.edit');
    Route::put('/paiement/{paiement}', [PaiementController::class, 'update'])->name('paiements.update');



});





Route::get('/', function () {
    return view('home');
})->name('acceuil');


Route::get('/agent', function () {
    return view('agent.store');
})->name('agent.store');

Route::get('/agentListe', function () {
    return view('agent.index');
})->name('agent.index');

Route::get('/agentEdit', function () {
    return view('agent.edit');
})->name('agent.edit');

Route::get('/contribuable', function () {
    return view('contribuable.store');
})->name('contribuable.store');

Route::get('/contribuableListe', function () {
    return view('contribuable.index');
})->name('contribuable.index');

Route::get('/contribuableEdit', function () {
    return view('contribuable.edit');
})->name('contribuable.edit');

Route::get('/declaration', function () {
    return view('declaration.store');
})->name('declaration.store');

Route::get('/declarationEdit', function () {
    return view('declaration.edit');
})->name('declaration.edit');

Route::get('/declarationListe', function () {
    return view('declaration.index');
})->name('declaration.index');

Route::get('/impot', function () {
    return view('impot.store');
})->name('impot.store');

Route::get('/impotEdit', function () {
    return view('impot.edit');
})->name('impot.edit');

Route::get('/impotListe', function () {
    return view('impot.index');
})->name('impot.index');

Route::get('/paiement', function () {
    return view('paiement.store');
})->name('paiement.store');

Route::get('/paiementEdit', function () {
    return view('paiement.edit');
})->name('paiement.edit');

Route::get('/paiementListe', function () {
    return view('paiement.index');
})->name('paiement.index');

Route::get('/connexion', function () {
    return view('auth.connexion');
})->name('connexion');

Route::post('/agents', [AgentController::class, 'store'])->name('agents.store');



