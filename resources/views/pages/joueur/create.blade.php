@extends('layouts.index')
@section('content')
<div class="container my-5">

<form action="/createjoueur" method="post" enctype="multipart/form-data">
@csrf

<div class="row ">
    <div class="pb-3">
        <input class="form-control" type="text" name="nom" placeholder="Nom *"
            required>
    </div>
    <div class="pb-3">
        <input class="form-control" type="text" name="prenom" placeholder="Prenom *"
            required>
    </div>
    <div class="pb-3">
        <input class="form-control" type="number" name="age" placeholder="age *"
            required>
    </div>
    <div class="pb-3">
        <input class="form-control" type="text" name="role" placeholder="role *"
            required>
    </div>
</div>
<div class="pb-3">
    <input class="form-control" type="number" name="telephone" placeholder="telephone*"
        required>
</div>
<div class="pb-3">
    <input class="form-control" type="text" name="continent" placeholder="continent *"
        required>
</div>
<div class="pb-3">
    <input class="form-control" name="email" placeholder="email *" required>
</div>
<div class="pb-3">
    <input class="form-control" name="genre" placeholder="genre *" required>
</div>
<div class="pb-3">
    <input class="form-control" name="pays" placeholder="pays de joueur *" required>
</div>
<div class="pb-3">
    <input class="form-control" type="text" class="btn btn-yellow" name='nomdeclub' placeholder="nomdeclub *">
</div>
<div class="pb-3">
    <input class="form-control" type="text" class="btn btn-yellow" name='ville' placeholder="ville *">
</div>
<div class="pb-3">
    <input class="form-control" type="text" class="btn btn-yellow" name='pays' placeholder="pays de jeux *">
</div>
<div class="pb-3">
    <input class="form-control" type="text" class="btn btn-yellow" name='maxdejoueurparrole' placeholder="maxdejoueurparrole *">
</div>
<div class="pb-3">
    <input class="form-control" type="file" class="btn btn-yellow" name='photo' placeholder="photo *">
</div>

<div class="pb-3">
    <button type="submit" class="btn btn-yellow">Ajouter</button>
</div>

</form>

</div>
@endsection
