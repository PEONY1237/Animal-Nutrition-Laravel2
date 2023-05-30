<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--icon/logo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- css -->
    <link href="{{ url('/css/admin.css') }}" rel="stylesheet">

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bulma -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> -->

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    
    <title>Administration</title>

    <style>
        #footer
        {
            position:fixed;
        }
    </style>
</head>

<body>

    @extends('Admin.AdminComponent')
    <main>

        @section('Nav')
        <!-- page web header -->
        <header>
            @parent
        </header>

        <!-- page web section -->
        <section>
            <div class="slide-cards">
                <div class="flex flex-col m-0 p-0">
                    <div class="flex overflow-x-scroll pb-10 pt-20 hide-scroll-bar">
                        <div class="flex flex-nowrap lg:ml-40 md:ml-20 ml-10 ">
                            <div class="inline-block px-3">
                                <!-- client -->
                                <div id="card-client">
                                    <div class="card-card">
                                        <div class="img-box">
                                            <img src="{{ url('/img/user.png') }}" />
                                        </div>
                                        <div class="content">
                                            <div class="details">
                                                <h2>Clients</h2>
                                                <div class="actionBtn">
                                                    <a href="{{ route('clients.create') }}">Ajouter Client</a>
                                                    <a href="{{ route('clients.index') }}">Voir Touts Les Clients</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-block px-3">
                                <!-- Admins -->
                                <div id="card-commandes">
                                    <div class="card-card" id="card-commandes">
                                        <div class="img-box">
                                            <img src="{{ url('/img/admin.png') }}" />
                                        </div>
                                        <div class="content">
                                            <div class="details">
                                                <h2>Admins</h2>
                                                <div class="actionBtn">
                                                    <a href="#">Ajouter Admin</a>
                                                    <a href="{{ route('admins.index') }}">Voir Toutes Les Admins</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-block px-3">
                                <!-- Comptes -->
                                <div id="card-commandes">
                                    <div class="card-card" id="card-commandes">
                                        <div class="img-box">
                                            <img src="{{ url('/img/acc.png') }}" />
                                        </div>
                                        <div class="content">
                                            <div class="details">
                                                <h2>Comptes</h2>
                                                <div class="actionBtn">
                                                    <a href="#">Ajouter Comptes</a>
                                                    <a href="{{ route('produits.index') }}">Voir Toutes Les Comptes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-block px-3">
                                <!-- Commandes -->
                                <div id="card-commandes">
                                    <div class="card-card" id="card-commandes">
                                        <div class="img-box">
                                            <img src="{{ url('/img/card.png') }}" />
                                        </div>
                                        <div class="content">
                                            <div class="details">
                                                <h2>Commandes</h2>
                                                <div class="actionBtn">
                                                    <a href="#">Ajouter Commande</a>
                                                    <a href="{{ route('produits.index') }}">Voir Toutes Les Commandes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-block px-3">
                                <!-- Categories -->
                                <div id="card-categories">
                                    <div class="card-card" id="">
                                        <div class="img-box">
                                            <img src="{{ url('/img/folder.png') }}" />
                                        </div>
                                        <div class="content">
                                            <div class="details">
                                                <h2>Categories</h2>
                                                <div class="actionBtn">
                                                    <a href="{{ route('categories.create') }}">Ajouter Categories</a>
                                                    <a href="{{ route('categories.index') }}">Voir Toutes Les Categories</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inline-block px-3">
                                <!-- Produits -->
                                <div id="card-produits">
                                    <div class="card-card">
                                        <div class="img-box">
                                            <img src="{{ url('/img/box.png') }}" />
                                        </div>
                                        <div class="content">
                                            <div class="details">
                                                <h2>Produits</h2>
                                                <div class="actionBtn">
                                                    <a href="{{ route('produits.create') }}" >Ajouter Produit</a>
                                                    <a href="{{ route('produits.index') }}" >Voir Touts Les Produits</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- <div class="container">

                clients
                <div id="card-client">
                    <div class="card-card">
                        <div class="img-box">
                            <img src="{{ url('/img/user.png') }}" />
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2>Clients</h2>
                                <div class="actionBtn">
                                    <button href="#">Ajouter Client</button>
                                    <button href="{{ route('produits.index') }}">Voir Touts Les Clients</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                Commandes
                <div id="card-commandes">
                    <div class="card-card" id="card-commandes">
                        <div class="img-box">
                            <img src="{{ url('/img/card.png') }}" />
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2>Commandes</h2>
                                <div class="actionBtn">
                                    <button href="#">Ajouter Commande</button>
                                    <button href="{{ route('produits.index') }}">Voir Toutes Les Commandes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                Categories
                <div id="card-categories">
                    <div class="card-card" id="">
                        <div class="img-box">
                            <img src="{{ url('/img/folder.png') }}" />
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2>Categories</h2>
                                <div class="actionBtn">
                                    <button href="#">Ajouter Categories</button>
                                    <button href="{{ route('produits.index') }}">Voir Toutes Les Categories</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                Produits
                <div class="card-card" id="card-produits">
                    <div class="img-box">
                        <img src="{{ url('/img/box.png') }}" />
                    </div>
                    <div class="content">
                        <div class="details">
                            <h2>Produits</h2>
                            <div class="actionBtn">
                                <button href="#">Ajouter Produit</button>
                                <button href="{{ route('produits.index') }}">Voir Touts Les Produits</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div> -->
        </section>
        @endsection


        <!-- page web footer -->
        
        <footer>
            @section('footer')
                @parent
            @endsection
        </footer>
        

    </main>

    <style>

        /* css scroll */
        .hide-scroll-bar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .hide-scroll-bar::-webkit-scrollbar {
            display: none;
        }

        h1 .lytgreen-head 
        {
            color: #009048;
        }

    </style>

    
</body>
</html>