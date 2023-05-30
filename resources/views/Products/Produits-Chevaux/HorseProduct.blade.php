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

@section('animal' , 'Chevaux & Equins & Poney' )

@section('content')

    @foreach($produits as $produit)
        @if($produit->Nom_Produit === 'Produit Chevaux')
        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title">Chevaux</h5>
                <a href="{{ route('cheval.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title"> Equins </h5>
                <a href="{{ route('equis.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title"> Poney </h5>
                <a href="{{ route('poney.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>
        @endif
    @endforeach

@endsection