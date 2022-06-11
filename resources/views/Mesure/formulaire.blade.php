@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="alternate">
                <h2 class="text-center mt-3 text-primary shadow p-3 mb-5 bg-body rounded">Formulaire d'insertion</h2>
            </marquee>
            <h5 class="text-center mb-3">Veuillez insérer vos données dans le formulaire ci-dessous.</h5>
            <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_couture3.store') }}" enctype="multipart/form-data">
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
                    <label for="exampleInputEmail1" class="form-label">Epaule</label>
                    <input type="number" class="form-control" name="epaule" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Manche</label>
                    <input type="number" class="form-control" name="manche" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hauteur taille</label>
                    <input type="number" class="form-control" name="hauteur_taille" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cuisse</label>
                    <input type="number" class="form-control" name="cuisse" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tour poitrine</label>
                    <input type="number" class="form-control" name="tour_poitrine" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hanche</label>
                    <input type="number" class="form-control" name="hanche" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hauteur taille</label>
                    <input type="number" class="form-control" name="hauteur_taille" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hauteur poitrine</label>
                    <input type="number" class="form-control" name="hauteur_poitrine" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tour bras</label>
                    <input type="number" class="form-control" name="tour_bras" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tour poignet</label>
                    <input type="number" class="form-control" name="tour_poignet" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Hauteur poitrine</label>
                    <input type="number" class="form-control" name="hauteur_poitrine" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Longueur bras</label>
                    <input type="number" class="form-control" name="longueur_bras" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tour taille</label>
                    <input type="number" class="form-control" name="tour_taille" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Intérieur jambe</label>
                    <input type="number" class="form-control" name="interieur_jambe" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="container d-flex">
                    <div>
                        <button type="submit" class="btn btn-success w-100">Envoyer</button>
                    </div> &nbsp;&nbsp;&nbsp;
                    <div>
                        <button type="reset" class="btn btn-danger w-100">Annuler</button>
                    </div>
                </div>
            </form>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection