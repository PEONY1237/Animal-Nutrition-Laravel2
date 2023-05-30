<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;


class Admin extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setPasswordAttribute($pass) {

        $this->attributes['password'] = Hash::make($pass);
    }
    
}
