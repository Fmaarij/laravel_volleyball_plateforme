<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use App\Http\Requests\StoreJoueurRequest;
use App\Http\Requests\UpdateJoueurRequest;
use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JoueurController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {

        $joueurs = Joueur::all();
        $photos=Photo::all();
        $roles=Role::all();
        $equipes = Equipe::all();
        return view( 'pages.joueur.index', compact( 'joueurs','photos','roles','equipes' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        $roles = Role::all();
        $continents = Continent::all();
        $equipes = Equipe::all();
        $joueurs = Joueur::all();
        return view( 'pages.joueur.create', compact('roles','continents','equipes','joueurs') );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreJoueurRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {

        $photos = new Photo;
        Storage::put( 'public/img/', $request->file( 'photo' ) );
        $photos->photo = $request->file( 'photo' )->hashName();
        $photos->save();

        $roles = new Role;
        $roles->role = $request->role;
        $roles->save();

        $continents = new Continent;
        $continents->continent = $request->continent;
        $continents->save();

        $equipes = new Equipe;
        $equipes->nomdeclub = $request->nomdeclub;
        $equipes->ville = $request->ville;
        $equipes->pays = $request->pays;
        $equipes->maxdejoueurparrole = $request->maxdejoueurparrole;
        $equipes->continent_id = $continents->id;
        $equipes->save();

        $joueur = new Joueur;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->pays = $request->pays;
        $joueur->role_id = $roles->id;
        $joueur->photo_id = $photos->id;
        $joueur->equipe_id = $equipes->id;
        $joueur -> save();
        return redirect()->back();

    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Joueur  $joueur
    * @return \Illuminate\Http\Response
    */

    public function show( Joueur $joueur ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Joueur  $joueur
    * @return \Illuminate\Http\Response
    */

    public function edit( Joueur $joueur ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateJoueurRequest  $request
    * @param  \App\Models\Joueur  $joueur
    * @return \Illuminate\Http\Response
    */

    public function update( UpdateJoueurRequest $request, Joueur $joueur ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Joueur  $joueur
    * @return \Illuminate\Http\Response
    */

    public function destroy( Joueur $joueur ) {
        //
    }
}
