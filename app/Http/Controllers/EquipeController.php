<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Http\Requests\StoreEquipeRequest;
use App\Http\Requests\UpdateEquipeRequest;
use App\Models\Continent;
use App\Models\Joueur;
use App\Models\Role;
use Illuminate\Http\Request;

class EquipeController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $equipes = Equipe::all();
        $continents = Continent::all();
        $joueurs = Joueur::all();
        return view ( 'pages.equipe.index', compact( 'equipes', 'continents', 'joueurs' ) );

    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        // $equipes = Equipe::with( 'nomdeclub:id,nomdeclub' );
        $equipes = Equipe::all();
        $continents = Continent::all();
        $joueurs = Joueur::all();
        return view ( 'pages.equipe.create', compact( 'equipes', 'continents', 'joueurs' ) );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreEquipeRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        $equipes = new Equipe;
        $equipes->nomdeclub = $request->nomdeclub;
        $equipes->ville = $request->ville;
        $equipes->pays = $request->pays;
        $equipes->maxdejoueurparrole = $request->maxdejoueurparrole;
        $equipes->continent_id = $request->continent_id;
        // $joueur->equipe_id = $equipes->id;
        $equipes->save();
        return redirect( 'equipeindex' );

    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Equipe  $equipe
    * @return \Illuminate\Http\Response
    */

    public function show( Request $request, $id ) {
        $equipes = Equipe::find( $id );
        $continents = Continent::find( $id );
        $joueurs = Joueur::find( $id );
        $roles = Role::find( $id );
        return view ( 'pages.equipe.show', compact( 'equipes', 'continents', 'joueurs', 'roles' ) );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Equipe  $equipe
    * @return \Illuminate\Http\Response
    */

    public function edit( Equipe $equipe ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateEquipeRequest  $request
    * @param  \App\Models\Equipe  $equipe
    * @return \Illuminate\Http\Response
    */

    public function update( UpdateEquipeRequest $request, Equipe $equipe ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Equipe  $equipe
    * @return \Illuminate\Http\Response
    */

    public function destroy( Equipe $equipe ) {
        //
    }

    public function showjoueur( $id ) {
        $joueurs = Joueur::all();
        $equipes = Equipe::find( $id );
        return view ( 'pages.equipe.showjoueur', compact( 'joueurs', 'equipes' ) );
    }

    public function infojouer( $id ) {
        $joueurs = Joueur::find( $id );
        return view ( 'pages.equipe.infojouer', compact( 'joueurs' ) );
    }
}
