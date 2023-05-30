<link href="{{ url('/css/component.css') }}" rel="stylesheet">
<style>
    label#contact 
    {
        

    }
</style>

@section('navbar')

    <!-- TopBar -->
    <div class="navBar">
        <!-- logo -->
        <div class="logo">
            <a href="{{ route('index.home') }}"><img class="logo" src="{{ URL('img/Logo.png') }}"></a>
        </div>
        <!-- navBar -->
        <ul class="nav-right">
            <li><a href="{{ route('index.home') }}">Acceuil</a></li>
            
            <!-- dropdown -->
            <div class="dropdown inline-block relative">
                <button class="btn btn-gray-100 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <a href="#"> Produits </i></a>
                </button>
                <ul class="dropdown-menu dropdown-menu">
                    <li><a class="dropdown-item"  href="{{ route('Vaches.index') }}">Vaches</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('Lapins.index') }}">Lapins</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('Chevaux.index') }}">Chevaux</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('Volailles.index') }}">Volailles</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('Chèvres.index') }}">Chèvres</a></li>                    
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('Escargots.index') }}">Escargots</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('Chats.index') }}">Chats</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('Chiens.index') }}">Chiens</a></li>
                </ul>
            </div>
            
            <li><a href="{{ route('index.about')}}" >A propos</a></li>
            <li><a href="{{ route('contactus.index')}}">Contactez-nous</a></li>
        </ul>
        
        <!-- Login / Sign in -->
        <ul class="nav-left">
            <li class="nav-item dropdown">
                <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                </button>
                <ul class="dropdown-menu dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('auth.show') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp; Client</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('auth.admin') }}"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp; Admin</a></li>
                </ul>
            </li>
        </ul>
    
    </div>
@show

@section('footer')
<footer class="site-footer">
    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="{{ url('/img/Logo.png') }}" class="navbar-brand-image img-fluid" alt="">
                    <span class="navbar-brand-text">
                        Alf Sahel
                        <small>alimentation composée des animaux</small>
                    </span>
                </a>
                <br>
                <br>
                <label id="contact"><span>N'hésitez pas à nous contacter si vous avez des questions </span>&nbsp;&nbsp;&nbsp;&nbsp;
                <a class="btn btn-success" href="{{ route('contactus.index')}}">Contactez-nous </a></label>
            </div>

            <div class="col-lg-3 col-12">
                <h5 class="site-footer-title mb-4">A propos de nous</h5>
                <br>

                <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                    <span>Tel  </span>
                    (+212) 522 964 705 
                </p>

                <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                    <span>Adresse  </span>&nbsp;&nbsp;
                    route d'El Jadida Km.28 Had Soualem Maroc
                </p>
                <br>
                <p class="copyright-text">Copyright © 2023 SALMA KHARFI</p>
            </div>

            <div class="col-lg-2 col-12 ms-auto">
                <ul class="social-icon mt-lg-5 mt-3 mb-4">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                
            </div>
            

        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#81B29A" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</footer>
@show