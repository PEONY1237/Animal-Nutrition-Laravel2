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
        background:url(../img/7.jpg)no-repeat;
        background-position:center;
        background-size:cover;
        padding: 98px 0 81px;
    }
</style>
@endsection

@section('animal' , 'Chèvres & Ovins & Caprins' )

@section('content')

    @foreach($produits as $produit)
        @if($produit->Nom_Produit === 'Produit Chèvres')
        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title">Chèvres</h5>
                <a href="{{ route('chevre.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title"> Ovins </h5>
                <a href="{{ route('ovin.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title"> Caprins </h5>
                <a href="{{ route('caprin.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>
        @endif
    @endforeach

@endsection