<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

// Route Equpie
Route::get( '/equipeindex', [ EquipeController::class, 'index' ] )->name( 'equipeindex' );
Route::get( '/createequipe', [ EquipeController::class, 'create' ] )->name( 'equipecreate' );
Route::post( '/storeequpie', [ EquipeController::class, 'store' ] );
Route::get( '/showequipe/{id}', [ EquipeController::class, 'show' ] );
Route::get( '/showjoueur/{id}', [ EquipeController::class, 'showjoueur'] );
Route::get( '/infojouer/{id}', [ EquipeController::class, 'infojouer'] );


// Route::get( '/edit/{id}', [ EquipeController::class, 'edit' ] );
// Route::put( '/update/{id}', [ EquipeController::class, 'update' ] );
// Route::delete( '/{id}/delete', [ EquipeController::class, 'destroy' ] );
// End of route Equpie


// Route Joueur
Route::get( '/', [ JoueurController::class, 'index' ] )->name( 'joueurindex' );
Route::get( '/create', [ JoueurController::class, 'create' ] )->name( 'joueurcreate' );
Route::post( '/createjoueur', [ JoueurController::class, 'store' ] );
// Route::get( '/show/{id}', [ JoueurController::class, 'show' ] );
// Route::get( '/edit/{id}', [ JoueurController::class, 'edit' ] );
// Route::put( '/update/{id}', [ JoueurController::class, 'update' ] );
// Route::delete( '/{id}/delete', [ JoueurController::class, 'destroy' ] );
// End of route Joueur
