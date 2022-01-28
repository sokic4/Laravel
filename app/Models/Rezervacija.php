<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Rezervacija extends Model
{
    use HasFactory;
    protected $fillable=[
        'ime',
        'prezime',
        'datum_preuzimanja',
        'datum_vracanja',
        'polazna_destinacija',
        'krajnja_destinacija',
        'brDana',
        'brPutnika',
        'automobil_id',
        'user_id',
        'model'
];
    //use HasFactory;
    public $timestamps = true;
    public function automobil(){
        return $this->belongsTo(Automobil::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
