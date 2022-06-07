@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Formulaire d'insertion de client</h5>

        <!-- General Form Elements -->
        <form method="POST" action="{{ route('gestion_couture.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nom">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Prénom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="prenom">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Téléphone</label>
                <div class="col-sm-10">
                    <input type="number" min="0" name="telephone" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Adresse</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="adresse">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </div>

        </form><!-- End General Form Elements -->

    </div>
</div>
@endsection