<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobil extends Model
{
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'godiste', 'opis', 'model','cena','gorivo','regBr'
    ];
    use HasFactory;
    public function rezervacijas(){

        return $this->hasMany(Rezervacija::class);
    }
}
