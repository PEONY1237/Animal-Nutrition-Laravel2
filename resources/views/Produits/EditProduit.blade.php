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

    <title>Produits</title>

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
                <p class="card-header-title"> Modification d'un Produit </p>
            </header> 

            <div class="card-content"> 
                <div class="content"> 
                    <form action="{{ route('produits.update', $produit->id) }}" method="POST" enctype="multipart/form-data"> 
                        @csrf 
                        @method('PUT') 

                        <div class="field"> 
                            <label class="label">Nom</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Nom_Produit') is-danger @enderror" type="text" name="Nom_Produit" value="{{ old('Nom_Produit' , $produit->Nom_Produit) }}" placeholder="Nom du Produit exp. (Produit Vaches)"> 
                            </div> 

                            @error('Nom_Produit') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Image</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Img_Produit') is-danger @enderror" type="file" name="Img_Produit" value="{{ $produit->Img_Produit }}"> 
                            </div> 

                            @error('Img_Produit') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div> 

                        <div class="field"> 
                            <label class="label">Protein</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Protein') is-danger @enderror" type="number" name="Protein" value="{{ old('Protein' , $produit->Protein) }}" placeholder="Protein du produit"> 
                            </div> 

                            @error('Protein') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Sodium</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Sodium') is-danger @enderror" type="number" name="Sodium" value="{{ old('Sodium' , $produit->Sodium) }}" placeholder="Sodium du produit"> 
                            </div> 

                            @error('Sodium') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Magnesium</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Magnesium') is-danger @enderror" type="number" name="Magnesium" value="{{ old('Magnesium' , $produit->Magnesium) }}" placeholder="Magnesium du produit"> 
                            </div> 

                            @error('Magnesium') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Potassium</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Potassium') is-danger @enderror" type="number" name="Potassium" value="{{ old('Potassium' ,  $produit->Potassium) }}" placeholder="Potassium du produit"> 
                            </div> 

                            @error('Potassium') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Cobalt</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Cobalt') is-danger @enderror" type="number" name="Cobalt" value="{{ old('Cobalt',  $produit->Cobalt) }}" placeholder="Cobalt du produit"> 
                            </div> 

                            @error('Cobalt') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Manganese</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Manganese') is-danger @enderror" type="number" name="Manganese" value="{{ old('Manganese' ,  $produit->Manganese) }}" placeholder="Manganese du produit"> 
                            </div> 

                            @error('Manganese') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Zinc</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Zinc') is-danger @enderror" type="number" name="Zinc" value="{{ old('Zinc',  $produit->Zinc) }}" placeholder="Zinc du produit"> 
                            </div> 

                            @error('Zinc') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Iodine</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Iodine') is-danger @enderror" type="number" name="Iodine" value="{{ old('Iodine' ,  $produit->Iodine) }}" placeholder="Iodine du produit"> 
                            </div> 

                            @error('Iodine') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Vitamin_A</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Vitamin_A') is-danger @enderror" type="number" name="Vitamin_A" value="{{ old('Vitamin_A' ,  $produit->Vitamin_A) }}" placeholder="Vitamin_A du produit"> 
                            </div> 

                            @error('Vitamin_A') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Vitamin_D</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Vitamin_D') is-danger @enderror" type="number" name="Vitamin_D" value="{{ old('Vitamin_D' ,  $produit->Vitamin_D) }}" placeholder="Vitamin_D du produit"> 
                            </div> 

                            @error('Vitamin_D') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Vitamin_E</label> 
                            
                            <div class="control"> 
                                <input class="input @error('Vitamin_E') is-danger @enderror" type="number" name="Vitamin_E" value="{{ old('Vitamin_E' ,  $produit->Vitamin_E) }}" placeholder="Vitamin_E du produit"> 
                            </div> 

                            @error('Vitamin_E') 
                                <p class="help is-danger"> {{ $message }} </p> 
                            @enderror 
                        </div>

                        <div class="field"> 
                            <label class="label">Date Expiration</label> 
                            
                            <div class="control"> 
                                <input class="input @error('date_exp') is-danger @enderror" type="text" name="date_exp" value="{{ old('date_exp' ,  $produit->date_exp ,  $produit->date_exp) }}" placeholder="exp. (6 mois)"> 
                            </div> 

                            @error('date_exp') 
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