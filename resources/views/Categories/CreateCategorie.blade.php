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

    <title> Categories </title>

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
        .content p
        {
            font-size: 13px;
            color:gray;
            font-family: Poppins;
        }
        #input_container 
        {
            border: 1px solid #e5e5e5;
        }

        input[type=file]::file-selector-button 
        {
            background-color: #fff;
            color: #000;
            border: 0px;
            border-right: 1px solid #e5e5e5;
            /* padding: 10px 15px;
            margin-right: 20px; */
            transition: .5s;
        }

        input[type=file]::file-selector-button:hover 
        {
            background-color: #eee;
            border: 0px;
            border-right: 1px solid #e5e5e5;
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
                <p class="card-header-title"> Création d'une Nouvelle Categorie</p>
            </header> 

            <div class="card-content"> 
                <div class="content"> 
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data" > 
                        @csrf 
                        <div class="field"> 
                            <label class="label">Nom</label> 
                            <p> Veuillez suivre lordre suivant lors de l'insertion des categories ( Vaches , Lapins , Chevaux , Volailles , Chèvres , Chats , Chiens , Escargots )</p>
                            
                            <div class="control">
                                <input class="input @error('Nom_Categorie') is-danger @enderror" type="text" name="Nom_Categorie" value="{{ old('Nom_Categorie') }}" placeholder="Nom du Categorie exp. (Vaches) "> 
                            </div> 

                            @error('Nom_Categorie') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Image Categorie</label> 
                            
                            <div class="control" id="input_container">
                                <input class="input @error('Img_Categorie') is-danger @enderror" type="file" name="Img_Categorie" value="{{ old('Img_Categorie') }}"> 
                            </div> 

                            @error('Img_Categorie') 
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