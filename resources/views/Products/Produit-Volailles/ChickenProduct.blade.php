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
        background:url(../img/17.jpg)no-repeat;
        background-position:center;
        background-size:cover;
        padding: 98px 0 81px;
    }
</style>
@endsection

@section('animal' , 'Volailles' )

@section('content')

    @foreach($produits as $produit)
        @if($produit->Nom_Produit === 'Produit Volailles')
        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title">Poussins</h5>
                <a href="{{ route('poussin.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title"> Poulets </h5>
                <a href="{{ route('poulet.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title"> Coqs </h5>
                <a href="{{ route('coqs.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="{{ url('/uploads/products/'.$produit->Img_Produit) }}" class="card-img-top" alt="Vaches Produit">
            <div class="card-body">
                <h5 class="card-title"> Dindonneaux </h5>
                <a href="{{ route('dind.index')}}" class="btn btn-success">Detail</a>
            </div>
        </div>
        @endif
    @endforeach

@endsection