<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rezervacija;
use App\Models\User;

class RezervacijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rezervacija::truncate();
        $user = User::factory()->create();
        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum_preuzimanja"=>"2021-02-01",
            "datum_vracanja"=> "2021-01-01",
            "polazna_destinacija"=>"Beograd",
            "krajnja_destinacija"=> "Nis",
            "brDana"=>"1",
            "brPutnika"=> "3",
            "model"=>"Opel Corsa",
            "automobil_id"=> "1",
            "user_id"=> $user->id,
        ]);
    }
}
