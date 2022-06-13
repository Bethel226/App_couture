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
            <form method="POST" class="shadow p-3 mb-5 bg-body rounded" action="{{ route('gestion_paiement.update', [$finds->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Total (FCFA)</label>
                    <input type="number" class="form-control" value="{{ $finds->total }}" name="total" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Avance (FCFA)</label>
                    <input type="number" class="form-control" value="{{ $finds->avance }}" name="avance" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Reste (FCFA)</label>
                    <input type="number" class="form-control" name="reste" value="{{ $finds->reste }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="container d-flex">
                    <div>
                        <button type="submit" class="btn btn-success w-100">Modifier</button>
                    </div> &nbsp;&nbsp;&nbsp;
                </div>
            </form>
        </div>
        @include('require.footer')
    </div>
</div>
@endsection