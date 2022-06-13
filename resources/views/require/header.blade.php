<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 mb-2 bg-body rounded">
    <div class="container-fluid">
        <img src="{{ asset('Images/logo.png')}}" style="width:100px; height:30px" alt="">
        <div class=" collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('home') }}">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gestion_client.index') }}">CLIENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gestion_modele.index') }}">MODELE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gestion_mesure.index') }}">MESURE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('gestion_paiement.index') }}">PAIEMENT</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2 text" id="myInput" onkeyup="myFunction()" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-success text-dark" type="submit">Recherche</button>
            </form>
        </div>
    </div>
</nav>