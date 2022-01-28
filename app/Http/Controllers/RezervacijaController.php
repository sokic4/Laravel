<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rezervacija;

class RezervacijaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rez = Rezervacija::all();
        return view('rez.index')->with('rez',$rez);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rez.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ime'=>'required',
            'prezime'=>'required',
            'datum_preuzimanja'=>'required',
            'datum_vracanja'=>'required',
            'polazna_destinacija'=>'required',
            'krajnja_destinacija'=>'required',
            'brDana'=>'required',
            'brPutnika'=>'required',
            'user_id'=>'required',
            'automobil_id'=>'required',
            'model'=>'required'
     ]);

        $r = new Rezervacija();
        $r->ime = $request->input('ime');
        $r->prezime = $request->input('prezime');
        $r->datum_preuzimanja = $request->input('datum_preuzimanja');
        $r->datum_vracanja = $request->input('datum_vracanja');
        $r->polazna_destinacija = $request->input('polazna_destinacija');
        $r->krajnja_destinacija = $request->input('krajnja_destinacija');
        $r->brDana = $request->input('brDana');
        $r->brPutnika = $request->input('brPutnika');
        $r->user_id = $request->input('user_id');
        $r->automobil_id = $request->input('automobil_id');
        $r->model = $request->input('model');
        $r->save();

        return redirect('/rezervacije')->with('success','Rezervacija je kreirana!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rez = Rezervacija::find($id);
        return view('rez.show')->with('rez',$rez);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rez = Rezervacija::find($id);
        return view('rez.edit')->with('rez',$rez);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $r = Rezervacija::find($id);
        $r->ime = $request->input('ime');
        $r->prezime = $request->input('prezime');
        $r->datum_preuzimanja = $request->input('datum_preuzimanja');
        $r->datum_vracanja = $request->input('datum_vracanja');
        $r->polazna_destinacija = $request->input('polazna_destinacija');
        $r->krajnja_destinacija = $request->input('krajnja_destinacija');
        $r->brDana = $request->input('brDana');
        $r->brPutnika = $request->input('brPutnika');
        $r->user_id = $request->input('user_id');
        $r->automobil_id = $request->input('automobil_id');
        $r->model = $request->input('model');
        $r->save();

        return redirect('/rezervacije')->with('success','Rezervacija je uspesno izmenjena!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rez = Rezervacija::find($id);
        $rez->delete();
        return redirect('/rezervacije')->with('success','Rezervacija je uspesno izbrisana!');
    }
}
