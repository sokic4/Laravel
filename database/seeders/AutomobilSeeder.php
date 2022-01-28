<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Automobil;

class AutomobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Automobil::truncate();
        Automobil::create([
            "godiste"=>"2017",
            "opis"=>"Opel Corsa (Korsa) je supermini automobil koji je projektovao nemački proizvođač automobila Opel. Proizvodnja modela Corsa započela je 1982. godine, kada se na tržištu pojavila prva generacija ovih automobila, sa oznakom Opel Corsa A. Trenutno je u fazi proizvodnja šeste generacije Corsa automobila, koja ima oznaku F.Ovaj Opelov model je doživeo izuzetno veliki komercijalni uspeh na tržištima širom sveta, pa i ne čudi zbog čega se proizvodnja Opel Corse uspešno odvija već skoro 40 godina. U zavisnosti od dela sveta u kojem se prodaje, Opel je za Corsu koristio različite nazive.",
            "cena"=>"8500",
            "model"=>"Opel Corsa",
            "gorivo"=>"Dizel 2.0",
            "regBr"=>"BG-123-AE",
        ]);

        Automobil::create([
            "godiste"=>"2020",
            "opis"=>"enault Clio (Reno Klio) je supermini vozilo francuskog proizvođača Renault. Proizvodnja ovog modela lansirana je 1990. godine, i trenutno je aktuelna peta generacija Clio automobila, koja se proizvodi od 2019. godine. Renault Clio je model koji već godinama unazad ostvaruje veliki komercijalni uspeh i konstantno je jedan od najprodavanijih automobila u Evropi. Pripisuju mu se velike zasluge kada je u pitanju povratak Renault-ove reputacije, koja je bila ozbiljno poljuljana tokom osamdesetih godina 20. veka.

            Renault Clio je jedini automobil, pored Golfa koji je dva puta proglašavan za najbolji evropski automobil godine, a to se desilo 1991. i 2006. godine. U Japanu se ovaj model prodaje pod nazivom Lutecija (Renault Lutecia), s obzirom na to da Honda poseduje prava na ime Clio. ",
            "cena"=>"13900",
            "model"=>"Renault Clio",
            "gorivo"=>"Dizel 1.5 DCI",
            "regBr"=>"BG-321-EA",
        ]);

    }
}
