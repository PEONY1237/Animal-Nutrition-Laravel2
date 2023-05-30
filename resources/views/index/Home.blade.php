<!-- 04/05/2023 - 05/27/2023 -->

<!-- links -->
<link href="{{ url('/css/home.css') }}" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link href="{{ URL('/css/bootstrap-icons.css') }}" rel="stylesheet">
    
    @extends('index.Component')
    @extends('index.template')
    <main>

        <!-- @section('contant') -->
        @section('navbar')

        <!-- page web header -->
        <header>
            @parent
        </header>
        
        <section>
            <!-- Panorma Carousel -->
            <div class="panorama">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="{{ URL('vid/1.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="{{ URL('vid/2.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="{{ URL('vid/3.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="{{ URL('vid/4.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="{{ URL('vid/5.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                        <div class="carousel-item">
                            <video class="img-fluid" autoplay loop muted>
                                <source src="{{ URL('vid/6.mp4') }}" type="video/mp4" />
                            </video>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <!-- Products Scrooling Cards -->
           
            <div id="products" class="slide-cards">
                <div class="flex flex-col m-auto p-auto">
                    <h1 class="flex py-5 lg:px-20 md:px-10 px-5 lg:mx-40 md:mx-20 mx-5 font-bold text-4xl text-gray-800">
                        ALF SAHEL <span class="lytgreen-head">Produits</span>
                    </h1>
                    <div class="flex overflow-x-scroll pb-10 hide-scroll-bar"> 
                        
                        <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 ">
                            @foreach($categories as $categorie)
                            <div class="inline-block px-3">
                                <a href="{{ url('/produit/'.$categorie->Nom_Categorie) }}">
                                    <div class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                                        <img src="{{ url('uploads/categories/'.$categorie->Img_Categorie) }}">
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- About us -->
            <div id="about" class="page-section pb-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 py-3 wow fadeInUp">
                            <div class="about-title">
                                    <h5>A PROPOS DE NOUS</h5>
                                    <h1>leaders de la filière des aliments composés pour animaux sur le plan national et en Afrique</h1>
                            </div>
                            <p id="about-content" class="text-grey mb-4"> La société ALF SAHEL est une entreprise marocaine qui propose une large gamme de produits pour la nutrition animale, elle a fait sa démarche en 2002, 
                                avec une production annuelle de +1,2 million de tonnes et un investissement cumulé de 850 millions de dirhams, ALF SAHEL se positionne, aujourd'hui, comme la plus grande entreprise marocaine
                                productrice d'aliments composés pour animaux, allie son expertise et son expérience pour fabriquer une alimentation saine et variée à la fois...
                            </p>
                            <a href="{{ route('index.about') }}" class="btn btn-active">Apprenez à nous connaître plus</a>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                            <div class="img-place custom-img-1">
                                <img src="{{ URL('img/8.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--statistics start-->
            <section  class="statistics">

                <!--container-->
                <div class="container">
                        
                    <!--box-->
                    <div class="box">
                        <!--icon-->
                        <img src="{{ url('/img/effectif.png') }}" />
                        <!--statistics-content-->
                        <div class="counter">500</div>
                        <h3>Effectif</h3>
                    </div>
                        
                    <!--box-->
                    <div class="box">
                        <!--icon-->
                        <!-- <i class="fa fa-check-circle" aria-hidden="true"></i> -->
                        <img src="{{ url('/img/check.png') }}" />
                        <!--statistics-content-->
                        <div class="counter">+ 1 000.000.000 </div>
                        <h3>Chiffre d'affaire</h3>
                    </div>
                    
                    <!--box-->
                    <div class="box">
                        <!--icon-->
                        <img src="{{ url('/img/cat-white.png') }}" alt="counter-icon" />
                        <!--statistics-content-->
                        <div class="counter">+10</div>
                        <h3>Animaux</h3>
                    </div>
                    
                    <!-- box-->
                    <div class="box">
                        <!-- icon-->
                        <div class="icon">
                            <img src="{{ url('/img/client.png') }}" alt="counter-icon" />
                        </div>
                        <!-- statistics-content-->
                        <div class="statistics-content">
                            <div class="counter">2856</div>
                            <h3>clients</h3>
                        </div>
                    </div>
                    
                </div>

            </section>
            <!--statistics end-->

            <!-- gallery -->
            <div id="gallery" class="gallery">
                <div class="container">
                    <div class="rowV">
                        <div class="row justify-content-start">
                            <div class="col-4">
                                <img src="{{ URL('img/5.jpg') }}" />
                            </div>
                            <div class="col-4">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="{{ URL('vid/8.mp4') }}" type="video/mp4" />
                                </video>
                            </div>
                            <div class="col-4">
                                <img src="{{ URL('img/10.jpg') }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="rowH">
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="{{ URL('vid/5.mp4') }}" type="video/mp4" />
                                </video>
                            </div>
                            <div class="col-4">
                                <img src="{{ URL('img/6.jpg') }}" />
                            </div>
                            <div class="col-4">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="{{ URL('vid/1.mp4') }}" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="rowV">
                        <div class="row justify-content-end">
                            <div class="col-4">
                                <img src="{{ URL('img/11.jpg') }}" />
                            </div>
                            <div class="col-4">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="{{ URL('vid/9.mp4') }}" type="video/mp4" />
                                </video>
                            </div>
                            <div class="col-4">
                                <img src="{{ URL('img/13.jpg') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="rowH">
                        <div class="row justify-content-around">
                            <div class="col-4">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="{{ URL('vid/10.mp4') }}" type="video/mp4" />
                                </video>
                            </div>
                            <div class="col-4">
                                <img src="{{ URL('img/19.jpg') }}" />
                            </div>
                            <div class="col-4">
                                <video class="img-fluid" autoplay loop muted>
                                    <source src="{{ URL('vid/3.mp4') }}" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Entreprises start-->
		<div class="slider-container">
            <h1 class="flex py-5 lg:px-20 md:px-10 px-5 lg:mx-40 md:mx-20 mx-5 font-bold text-4xl text-gray-800">
                Nos 
                <span class="lytgreen-head">Entreprises</span>
            </h1>
            <!-- <h2 class="text-center font-weight-bold">Nos Entreprises</h2> -->
            <!-- <h2>Nos Entreprises</h2> -->
            <section class="customer-logos slider">
                <div class="slide"><img src="{{ URL('img/branches.png') }}" alt="logo"></div>
                <div class="slide"><img src="{{ URL('img/branches.png') }}" alt="logo"></div>
                <div class="slide"><img src="{{ URL('img/branches.png') }}" alt="logo"></div>
                <div class="slide"><img src="{{ URL('img/branches.png') }}" alt="logo"></div>
                <div class="slide"><img src="{{ URL('img/branches.png') }}" alt="logo"></div>
                <div class="slide"><img src="{{ URL('img/branches.png') }}" alt="logo"></div>
                <div class="slide"><img src="{{ URL('img/branches.png') }}" alt="logo"></div>
                <div class="slide"><img src="{{ URL('img/branches.png') }}" alt="logo"></div>
            </section>
        </div>
		<!--Entreprises end-->

        @endsection

        <!-- Footer -->
        <footer>
            @section('Footer')
                @parent
            @endsection
        </footer>

    </main>

    
    @endsection