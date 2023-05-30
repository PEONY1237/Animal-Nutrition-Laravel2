<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Produit;

class Commande extends Model
{
    use HasFactory;

    // protected $primarykey = 'ID_Commande';

    protected $guarded = [];


    public function Client()
    {
        return $this->belongsTo(Client::class , 'client_id');
    }

    public function Produit()
    {
        return $this->hasOne(Produit::class , 'produit_id');
    }
}
