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

    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <title>Comptes</title>

    <style>
        .card
        {
            margin-top : 90px;
            margin-bottom : 90px;
        }
        .control input:focus
        {
            box-shadow: none;
            border: 3px solid #368263;
        }
    </style>
</head>
<body>

    @extends('Admin.AdminComponent')
    <main>
        @section('Nav')
        <header>
            @parent
        </header>

        <div class="card"> 

            <header class="card-header"> 
                <p class="card-header-title"> Création d'un Nouveau Compte </p>
            </header> 

            <div class="card-content"> 
                <div class="content"> 
                    <form action="{{ route('Comptes.store') }}" method="POST"> 
                        @csrf

                        <div class="field"> 
                            <label class="label">Nom</label> 
                            
                            <div class="control"> 
                                <input class="input @error('name') is-danger @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Nom du client"> 
                            </div> 

                            @error('name') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div> 

                        <div class="field"> 
                            <label class="label">Email</label> 
                            
                            <div class="control"> 
                                <input class="input @error('email') is-danger @enderror" type="text" name="email" value="{{ old('email') }}" placeholder="Email du client"> 
                            </div> 

                            @error('email') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div> 

                        <div class="field"> 
                            <label class="label">Code</label> 
                            
                            <div class="control"> 
                                <input class="input @error('password') is-danger @enderror" type="text" name="password" value="{{ old('password') }}" placeholder="Mot de passe du client"> 
                            </div> 

                            @error('password') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Telephone</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Telephone') is-danger @enderror" type="text" name="Telephone" value="{{ old('Telephone') }}" placeholder="Telephone du Compte"> 
                            </div> 

                            @error('Telephone') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <div class="control"> 
                                <button type="submit" class="button is-success"> Envoyer </button> 
                            </div> 
                        </div> 

                    </form> 
                </div> 
            </div> 
        </div> 
        @endsection

        <footer>
            @section('footer')
                @parent
            @endsection
        </footer>

    </main>
</body>
</html>