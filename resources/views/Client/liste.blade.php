@extends('layouts.app')

@section('content')
<div class="container shadow p-3 mb-5 bg-body rounded">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="alternate">
                <h4 class="text-center mt-3 text-success shadow p-3 mb-2 bg-body rounded">LISTE DES CLIENTS</h4>
            </marquee>
            <a href="{{route('gestion_client.create') }}">
                <button type="submit" class="btn btn-success mb-2" style="width:100px">Ajouter</button>
            </a>
            <table class="table shadow p-3 mb-3 bg-body rounded" id="myTable">
                <thead>
                    <tr class="bg-primary text-light" style="background:linear-gradient(to bottom, #fff,green)">
                        <th scope="col">Numéro</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Adresse</th>
                        <th scope="col">Email</th>
                        <th colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{$client->id}}</th>
                        <td>{{$client->nom}}</td>
                        <td>{{$client->prenom}}</td>
                        <td>{{$client->telephone}}</td>
                        <td>{{$client->adresse}}</td>
                        <td>{{$client->email}}</td>
                        <td> <a class="button" href="{{route('gestion_client.show', [$client->id]) }}"><img src="{{ asset('Images/more.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td> <a class="button" href="{{route('gestion_client.edit', [$client->id]) }}"><img src="{{ asset('Images/edit.png') }}" style="width:30px;height:30px" alt=""></a> </td>
                        <td><a class="button" href="{{url('supprimer_client/'.$client->id) }}"><img src="{{ asset('Images/del.png') }}" style="width:30px;height:30px" alt=""></a></td>
                        @endforeach
                </tbody>
            </table>
        </div>
        @include('require.script')
        @include('require.footer')
    </div>
</div>
@endsection