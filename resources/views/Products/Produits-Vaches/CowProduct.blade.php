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
        background:url(../img/15.jpg)no-repeat;
        background-position:center;
        background-size:cover;
        padding: 98px 0 81px;
    }
</style>
@endsection

@section('animal' , 'Vaches Laitières & Bovins & Vaches Taries' )

@section('content')

    @foreach($produits as $produit)
        @if($produit->Nom_Produit === 'Produit Vaches')
        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title">Vaches Laitières</h5>
                <a href="{{ route('vache.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title"> Bovins </h5>
                <a href="{{ route('bovin.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title"> Vaches Taries </h5>
                <a href="{{ route('tauraux.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>
        @endif
    @endforeach

@endsection