<?php

namespace Database\Seeders;
use App\Models\Automobil;
use App\Models\User;
use App\Models\Rezervacija;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AutomobilSeeder::class);
         //$this->call(RezervacijaSeeder::class);
        User::truncate();
        Automobil::truncate();
        Rezervacija::truncate();
        User::factory(3)->create();
        $user = User::factory()->create();
        $automobil = Automobil::create([
            "regBr"=>"BG-000-AC",
            "opis"=>"Srbija",
            "model"=>"Opel Corsa",
            "gorivo"=>"Dizel 2.0",
            "godiste"=>"2017",
            "cena"=>"8500",
        ]);

        $array=explode(" ",$user->name);
        $prezime = $array[1];
        $ime = $array[0];
        Rezervacija::create([
            "ime"=>$ime,
            "prezime"=> $prezime,
            "datum_preuzimanja"=>"2021-07-01",
            "datum_vracanja"=> "2021-01-01",
            "polazna_destinacija"=>"Beograd",
            "krajnja_destinacija"=> "Nis",
            "brDana"=>"5",
            "brPutnika"=> "1",
            "model"=>"Renault Clio",
            "automobil_id"=> "1",
            "user_id"=> $user->id,
        ]);
    }
}
