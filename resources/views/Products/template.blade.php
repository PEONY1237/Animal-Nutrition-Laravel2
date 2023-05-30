<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--icon/logo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- produit css -->
    <link href="{{ url('/css/produit.css') }}" rel="stylesheet">

    <!-- Bulma -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> -->

    <title>ALF SAHEL</title>

    @yield('css')
    @yield('js')
    <script>
        function Show1(){
            document.getElementById("table-detail").style.display='none';
            document.getElementById("table-qte").style.display='block';
        }
        function Show2(){
            document.getElementById("table-detail").style.display='block';
            document.getElementById("table-qte").style.display='none';
        }
    </script>
</head>
<body>

    @extends('index.Component')

    <main>
        @section('navbar')

        <!-- page web header -->
        <header>
            @parent
        </header>

        <section>
            
            <div class="banner">
                <h1>Produits <span class="lytgreen-head"> @yield('animal') </span></h1>
            </div>

            <div class="container">
                @yield('content')
            </div>
            

        </section>

        @endsection

        <!-- Footer -->
        <footer>
            @section('Footer')
                @parent
            @endsection
        </footer>
    </main>
    
</body>
</html>