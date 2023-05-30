@extends('Products.template')

@section('css')
<style>
    .banner
    {
        margin-top: 15px;
        padding-top: var(--section-padding);
        padding-bottom: var(--section-padding);
        text-align: center;
        position:relative;
        background:url(../img/23.jpg)no-repeat;
        background-position:center;
        background-size:cover;
        padding: 98px 0 81px;
    }
</style>
@endsection

@section('js')
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
@endsection

@section('animal' , 'Chevaux' )

@section('content')

    @foreach($produits as $produit)
        @if($produit->Nom_Produit === 'Produit Chevaux')
        <div class="detail-product">

            <div class="detail">

                <div class="titre">
                    <h1>Alimentation des Chevaux</h1>
                    <p>Alf Sahel Respecte Toutes les normes alimentaires pour des Chevaux en bonne santé ... <br>
                    un véterinaire  spécialisé vache indique soigneusement les éléments nutritifs dont les Chevaux avons besoin</p>
                </div>

                <div class="stockage-table">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td rowspan="3"><strong>Stockage</strong></td>
                                <td>Stocker à l'abri de la lumière directe du soleil</td>
                            </tr>
                            <tr>
                                <td>Température ne dépassant pas 35 degrés Celsius</td>
                            </tr>
                            <tr>
                                <td>Conserver dans un endroit sec et bien aéré</td>
                            </tr>
                            <tr>
                                <td><strong>Pourcentage d'humidité lors de l'emballage</strong></td>
                                <td>12 % </td>
                            </tr>
                            <tr>
                                <td><strong>Avertissements et precautions</strong></td>
                                <td>Une gradation dans l'utilisation du fourrage est recommandée</td>
                            </tr>
                            <tr>
                                <td><strong>Les composants</strong></td>
                                <td>Luzerne, produits céréaliers, son, produits à base de protéines végétales, mélasse, sel, calcaire, phosphate dicalcique, mélange de vitamines et de minéraux</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="contact-buttons">
                        <a class="btn btn-success" href="{{ route('contactus.index')}}">Contactez-Nous </a>
                        <h1>Pour Passer une Commande & Pour Plus d'informations</h1>
                    </div>
                </div>

                <div class="product-info">
                    <h2><span>Date Expiration : Valable {{$produit->date_exp}} à compter de la date de production</span></h2>
                    <h2><span>Numero De Produit : {{$produit->id}}</span></h2>
                    <h2><span>poids net à l'emballage: 50kg</span></h2>
                </div>

            </div>

            <div class="detail-right">
                <div class="detail-img">
                    <div class="img-feed">
                        <img src="{{ url('/img/footer.png') }}">
                    </div>
                    <div class="img-product">
                        <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}">
                    </div>
                </div>

                <div class="buttons">
                    <button id="btn_quantite" onclick="Show1()" > Quantite </button>
                    <button id="btn_analyse" onclick="Show2()" > Analyse </button>
                </div>

                <div class="detail-table">

                    <div id="table-detail">
                        <table class="table">
                            <thead>
                                <th>Analyse</th>
                                <th>Unité</th>
                            </thead>
                            <tbody class="table-group-divider">
                            <tbody>
                                <tr>
                                    <td><strong>Protein</strong></td>
                                    <td>{{ $produit->Protein }} %</td>
                                </tr>
                                <tr>
                                    <td><strong>Sodium</strong></td>
                                    <td>{{ $produit->Sodium }} %</td>
                                </tr>
                                <tr>
                                    <td><strong>Magnesium</strong></td>
                                    <td>{{ $produit->Magnesium }} %</td>
                                </tr>
                                <tr>
                                    <td><strong>Potassiums</strong></td>
                                    <td>{{ $produit->Potassium }} %</td>
                                </tr>
                                <tr>
                                    <td><strong>Cobalt</strong></td>
                                    <td>{{ $produit->Cobalt }} %</td>
                                </tr>
                                <tr>
                                    <td><strong>Manganese</strong></td>
                                    <td>{{ $produit->Manganese }} %</td>
                                </tr>
                                <tr>
                                    <td><strong>Zinc</strong></td>
                                    <td>{{ $produit->Zinc }} % </td>
                                </tr>
                                <tr>
                                    <td><strong>Iodine</strong></td>
                                    <td>{{ $produit->Iodine }} %</td>
                                </tr>
                                <tr>
                                    <td><strong>Vitamin_A</strong></td>
                                    <td>{{ $produit->Vitamin_A }} %</td>
                                </tr>
                                <tr>
                                    <td><strong>Vitamin_D</strong></td>
                                    <td>{{ $produit->Vitamin_D }} %</td>
                                </tr>
                                <tr>
                                    <td><strong>Vitamin_E</strong></td>
                                    <td>{{ $produit->Vitamin_E }} %</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="table-qte" style="display: none;">
                        <table class="table">
                            <thead>
                                <th>Alimentation requis(Kg/tête/jour)</th>
                                <th>Poids de l'animal (kg)</th>
                                <th>Animal Cible</th>
                            </thead>
                            <tbody class="table-group-divider">
                            <tbody>
                                <tr>
                                    <td>1.6</td>
                                    <td>40</td>
                                    <td rowspan="5"><img src="{{ url('/img/horse.png') }}"></td>
                                </tr>
                                <tr>
                                    <td>1.7</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>1.8</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>1.9</td>
                                    <td>70</td>
                                </tr>
                                <tr>
                                    <td>2.0</td>
                                    <td>80</td>
                                </tr>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>

            </div>


            
        </div>

        @endif
    @endforeach

@endsection