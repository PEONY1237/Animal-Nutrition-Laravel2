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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <style>
        .card
        {
            margin-top : 90px;
            margin-bottom : 90px;
        }
    </style>

    <script type="text/javascript">
        function hide()
        {
            document.getElementById('info').style.display = 'none';
        }
    </script>

    <title>Produits</title>
</head>
<body>

    @extends('Admin.AdminComponent')
    <main>
        @section('Nav')
        <header>
            @parent
        </header>

        @if( session()->has('info') ) 
            <div id="info" class="notification is-success"> 
                <button class="delete" onclick="hide()"></button>
                {{ session('info') }} 
            </div> 
        @endif 

        <div class="card"> 

            <header class="card-header"> 
                <p class="card-header-title">Produits</p>
                <a class="button is-success" href="{{ route('produits.create') }}">Ajouter un Nouveau Produit</a>
            </header> 

            <div class="card-content"> 

                <div class="content"> 

                    <table class="table is-hoverable"> 

                        <thead> 
                            <tr>
                                <th>Nom</th> 
                                <th>Protein</th> 
                                <th>Sodium</th> 
                                <th>Magnesium</th>
                                <th>Potassium</th>
                                <th>Cobalt</th>
                                <th>Manganese</th>
                                <th>Zinc</th>
                                <th>Iodine</th>
                                <th>Vitamin_A</th>
                                <th>Vitamin_D</th>
                                <th>Vitamin_E</th>
                                <th>Date Expiration</th>
                                <th>Image Produit</th>
                                <th></th>
                                <th></th>
                            </tr> 
                        </thead> 

                        <tbody> 
                            @foreach($produits as $produit) 
                            <tr>
                                <td>
                                    {{ $produit->Nom_Produit }}
                                </td> 
                                
                                <td>
                                    {{ $produit->Protein }} %
                                </td>
                                <td>
                                    {{ $produit->Sodium }} %
                                </td> 
                                <td>
                                    {{ $produit->Magnesium }} %
                                </td> 
                                <td>
                                    {{ $produit->Potassium }} %
                                </td>
                                <td>
                                    {{ $produit->Cobalt }} %
                                </td>
                                <td>
                                    {{ $produit->Manganese }} %
                                </td>
                                <td>
                                    {{ $produit->Zinc }} % 
                                </td>
                                <td>
                                    {{ $produit->Iodine }} %
                                </td>
                                <td>
                                    {{ $produit->Vitamin_A }} %
                                </td>
                                <td>
                                    {{ $produit->Vitamin_D }} %
                                </td>
                                <td>
                                    {{ $produit->Vitamin_E }} %
                                </td>
                                <td>
                                    {{ $produit->date_exp }} 
                                </td>
                                <td> 
                                    @if($produit->Img_Produit)
                                        <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}">
                                    @else 
                                        <span>No image found!</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="button is-warning" href="{{ route('produits.edit', $produit->id) }}" >Modifier</a>
                                </td> 
                                <td>
                                    <form action="{{ route('produits.destroy', $produit->id) }}" method="post"> 
                                        @csrf 
                                        @method('DELETE') 
                                        <button class="button is-danger" type="submit">Supprimer</button> 
                                    </form>
                                </td> 
                            </tr>
                            @endforeach 
                        </tbody> 
                    </table> 
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