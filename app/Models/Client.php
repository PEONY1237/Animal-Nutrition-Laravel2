<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primarykey = 'CIN';

    protected $guarded = [];

    // protected $hidden = [
    //     'Password_Client'
    // ];

    public function Commande()
    {
        return $this->hasMany(Commande::class , 'CIN');
    }
}
