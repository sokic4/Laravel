<?php

namespace App\Http\Controllers;

use App\Models\Automobil;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Parser\Inline\AutolinkParser;

class AutomobilController extends Controller
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
        $a = Automobil::all();
        return view('automobili.index')->with('rez',$a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automobili.create');
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
            'regBr'=>'required',
            'godiste'=>'required',
            'cena'=>'required',
            'model'=>'required',
            'opis'=>'required',
            'gorivo'=>'required',
     ]);

        $r = new Automobil();
        $r->regBr = $request->input('regBr');
        $r->gorivo = $request->input('gorivo');
        $r->cena = $request->input('cena');
        $r->opis = $request->input('opis');
        $r->godiste = $request->input('godiste');
        $r->model = $request->input('model');
        $r->save();

        return redirect('/automobil')->with('success','Automobil je uspesno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $a = Automobil::find($id);
        return view('automobili.show')->with('r',$a);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $a = Automobil::find($id);
        return view('automobili.edit')->with('rez',$a);
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
        $r = Automobil::find($id);
        $r->regBr = $request->input('regBr');
        $r->gorivo = $request->input('gorivo');
        $r->cena = $request->input('cena');
        $r->opis = $request->input('opis');
        $r->godiste = $request->input('godiste');
        $r->model = $request->input('model');
        $r->save();

        return redirect('/automobil')->with('success','Automobil je uspesno kreiran!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Automobil::find($id);
        $a->delete();
        return redirect('/automobil')->with('success','Automobil je uspesno izbrisan!');
    }
}
