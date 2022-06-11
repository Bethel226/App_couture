@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="alternate">
                <h2 class="text-center text-primary shadow p-3 mb-5 bg-body rounded">Détail des mesures {{$finds->id}}</h2>
            </marquee>
            <div class="card m-3 shadow p-3 bg-body rounded" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title text-center text-primary">Détail Mesure</h5>
                            <p class="card-text">Epaule: {{$finds->epaule}}</p>
                            <p class="card-text">Manche: {{$finds->manche}}</p>
                            <p class="card-text">Cuisse: {{$finds->cuisse}}</p>
                            <p class="card-text">Hanche: {{$finds->hanche}}</p>
                            <p class="card-text">Hauteur taille: {{$finds->hauteur_taille}}</p>
                            <p class="card-text">Hauteur poitrine: {{$finds->hauteur_poitrine}}</p>
                            <p class="card-text">Tour bras: {{$finds->tour_bras}}</p>
                            <p class="card-text">Tour poignet: {{$finds->tour_poignet}}</p>
                            <p class="card-text">Longueur bras: {{$finds->longueur_bras}}</p>
                            <p class="card-text">Tour taille: {{$finds->tour_taille}}</p>
                            <p class="card-text">Intérieur jambe: {{$finds->interieur_jambe}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection