<link href="{{ url('/css/admincomp.css') }}" rel="stylesheet">

<!-- Bulma -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

@section('Nav')
    <div class="container">

        <!-- logo -->
        <div class="logo">
            <a href="#"><img class="logo" src="{{ URL('img/Logo.png') }}"></a>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">Acceuil</a>
                </li>

                <!-- dropdown -->
                <li class="nav-item dropdown">
                    <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <a href="#">
                            <i class="fa fa-database" aria-hidden="true"></i>
                        </a>
                    </button>
                    <ul class="dropdown-menu dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp; Clients</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;&nbsp; Commandes</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-folder-open" aria-hidden="true"></i>&nbsp;&nbsp; Categories</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp; Produits</a></li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('messagerie.index') }}" class="nav-link"> Boite Messages </a>
                </li>

            </ul>
        </nav>

        <!-- Login / Sign in -->
        <div class="login">
            <li class="nav-item dropdown">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                </button>
                <ul class="dropdown-menu dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp; Mon Profil</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('index.home') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp; Se Déconnecter</a></li>
                </ul>
            </li>
        </div>
        
    </div>
@show

@section('footer')
    <div class="footer-bottom">
        <p>Copyright © 2023 Designed By SALMA KHARFI</p>
    </div>
@show

