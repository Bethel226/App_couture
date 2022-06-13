@extends('layouts.app')

@section('content')
<div class="container shadow p-3 mb-5 bg-body rounded">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="alternate">
                <h4 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded">LISTE DES PAIEMENTS</h4>
            </marquee>
            <a href="{{route('gestion_paiement.create') }}">
                <button type="submit" class="btn btn-success mb-2" style="width:100px">Ajouter</button>
            </a>
            <table class="table shadow p-3 mb-5 bg-body rounded" id="myTable">
                <thead>
                    <tr class="bg-primary text-light" style="background:linear-gradient(to bottom, #fff,green)">
                        <th scope="col">Numéro</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Total</th>
                        <th scope="col">Avance</th>
                        <th scope="col">Reste</th>
                        <th colspan="3" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($paiements as $paiement)
                    <tr>
                        <th scope="row">{{$paiement->id}}</th>
                        <td>{{$paiement->Client->nom}}</td>
                        <td>{{$paiement->Client->prenom}}</td>
                        <td>{{$paiement->total}}</td>
                        <td>{{$paiement->avance}}</td>
                        <td>{{$paiement->reste}}</td>
                        <td> <a class="button" href="{{route('gestion_paiement.show', [$paiement->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td> <a class="button" href="{{route('gestion_paiement.edit', [$paiement->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td><a class="button" href="{{url('supprimer_paiement/'.$paiement->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                        @endforeach
                </tbody>
            </table>
        </div>
        @include('require.script')
        @include('require.footer')
    </div>
</div>
@endsection