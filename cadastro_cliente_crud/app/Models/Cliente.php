<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //Fillable: indicates to the model the fields to be registered;
    protected $fillable = [
        'name','cnpj','phone','email','address','updated_at','created_at'
    ];
}
