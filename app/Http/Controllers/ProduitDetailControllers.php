<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitDetailControllers extends Controller
{

    // Produits Vaches
    public function CowProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produits-Vaches.CowProduct' , compact('produits'));
    }

    public function VacheDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produits-Vaches.VacheDetail' , compact('produits'));
    }

    public function BovinDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produits-Vaches.BovinDetail' , compact('produits'));
    }

    public function TaurauxDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produits-Vaches.VachesTariesDetail' , compact('produits'));
    }
    

    // Produit Lapins
    public function BunnyProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produits-Lapins.LapinDetail' , compact('produits'));
    }


    // Produit Chevaux
    public function HorseProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produits-Chevaux.HorseProduct' , compact('produits'));
    }

    public function ChevalProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produits-Chevaux.ChevalDetail' , compact('produits'));
    }

    public function EquinProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produits-Chevaux.EquisDetail' , compact('produits'));
    }

    public function PoneyProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produits-Chevaux.PoneyDetail' , compact('produits'));
    }


    // Produit Volailles
    public function ChickenProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Volailles.ChickenProduct' , compact('produits'));
    }

    public function PouletDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Volailles.PouletDetail' , compact('produits'));
    }

    public function PoussinsDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Volailles.PoussinsDetail' , compact('produits'));
    }

    public function CoqDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Volailles.CoqDetail' , compact('produits'));
    }

    public function DindDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Volailles.DindDetail' , compact('produits'));
    }


    // Produit Chèvres
    public function GoatProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Chevres.GoatProduct' , compact('produits'));
    }

    public function ChevreDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Chevres.ChevreDetail' , compact('produits'));
    }

    public function OvinDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Chevres.OvinDetail' , compact('produits'));
    }

    public function CaprinDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Chevres.CaprinDetail' , compact('produits'));
    }


    // Produit Escargots
    public function EscargotDetailindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Escargots.EscargotDetail' , compact('produits'));
    }


    // Produit Chats
    public function CatProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Chats.ChatDetail' , compact('produits'));
    }

    // Produit Chiens
    public function DogProductindex()
    {
        $produits = Produit::all();
        return view('Products.Produit-Chiens.ChienDetail' , compact('produits'));
    }

}
