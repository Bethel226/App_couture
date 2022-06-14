@extends('layouts.app')

@section('content')
<div class="container shadow p-3 mb-5 bg-body rounded">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="alternate">
                <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire d'insertion</h2>
            </marquee>
            <h5 class="text-center mb-3">Veuillez insérer vos données dans le formulaire ci-dessous.</h5>
            <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_paiement.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Client</label>
                    <select class="form-control" name="clients_id" id="">
                        @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->nom}} {{$client->prenom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Modèle</label>
                    <select class="form-control" name="modeles_id" id="">
                        @foreach($modeles as $modele)
                        <option value="{{$modele->id}}">{{$modele->nom}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date</label>
                    <input type="date" class="form-control" name="date" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Total (FCFA)</label>
                    <input type="number" class="form-control" min="5000" name="total" id="total" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Avance (FCFA)</label>
                    <input type="number" class="form-control" min="5000" name="avance" id="avance" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Reste (FCFA)</label>
                    <input type="number" onkeyup="this.value='';" class="form-control" min="5000" name="reste" id="reste" aria-describedby="emailHelp">
                </div>
                <div class="container d-flex">
                    <div>
                        <button type="submit" onclick="Calculer();" class="btn btn-success w-100">Envoyer</button>
                    </div> &nbsp;&nbsp;&nbsp;
                    <div>
                        <button type="reset" class="btn btn-danger w-100">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
        @include('require.footer')
        @include('require.script')
    </div>
</div>
@endsection