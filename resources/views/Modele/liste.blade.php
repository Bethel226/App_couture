@extends('layouts.app')

@section('content')
<div class="container shadow p-3 mb-5 bg-body rounded">
    <div class="row">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="alternate">
                <h4 class="text-center mt-3 text-success shadow p-3 mb-2 bg-body rounded">LISTE DES MODELES</h4>
            </marquee>
            <a href="{{route('gestion_modele.create') }}">
                <button type="submit" class="btn btn-success mb-2" style="width:100px">Ajouter</button>
            </a>
            @foreach($modeles as $modele)
            <div class="card mb-3 shadow p-3 bg-body rounded justify-content-center" style="max-width: 540px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <h5 class="card-title text-center text-warning">{{$modele->nom}}</h5>
                            <img src="{{asset('storage').'/'.$modele->photo}}" style="width:500px;height:400px" alt="">
                        </div> <br>
                        <div class="card-body col-md-8">
                            <p class="card-text">Nom modèle: {{$modele->nom}}</p>
                            <p class="card-text text-danger">Prix: {{$modele->prix}}</p>
            <a href="{{route('gestion_modele.edit', [$modele->id]) }}">
                <button type="submit" class="btn btn-success mb-2" style="width:100px">Modifier</button>
            </a>
            <a href="{{url('supprimer_modele/'.$modele->id) }}">
                <button type="submit" class="btn btn-danger mb-2" style="width:100px">Supprimer</button>
            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        @include('require.script')
        @include('require.footer')
    </div>
</div>
@endsection