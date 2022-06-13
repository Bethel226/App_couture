@extends('layouts.app')

@section('content')
<div class="container shadow p-3 mb-5 bg-body rounded">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('require.header')
            <marquee behavior="alternate">
                <h2 class=" text-center">Bienvenue dans Gestion Couture</h2>
            </marquee>
            <div id="carouselExampleDark" class="carousel carousel-dark slide shadow p-3 mb-2 bg-body rounded" data-bs-ride="carousel" style="background:linear-gradient(to bottom, #fff,green)">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('Images/1.webp')}}" class="d-block w-100" style="height:500px" alt="">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Une couture haut de gamme</h5>
                            <p>Des modèles de dernières générations!!!</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('Images/2.webp')}}" class="d-block w-100" style="height:500px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Des stylistes de renommée internationale</h5>
                            <p>Des coupes adaptées à vos besoins!!!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('Images/3.webp')}}" class="d-block w-100" style="height:500px" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mes matières soigneusement selectionnées!!!</h5>
                            <p>Produits venus de la forêt africaine!!!</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            @include('require.footer')
        </div>
    </div>
    @endsection