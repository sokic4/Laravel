@extends('layouts.app')
@section('content')
<!-- dodali smo dugme da nnas vrati na prethodnu stranicu -->
<a href="/automobil/public/rezervacije" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci nosioca rezervacije: {{$rez->ime}} {{$rez->prezime}}</h1>
    <div>
        Polazna destinacija: {{$rez->polazna_destinacija}}
    </div>
    <div>
       Datum preuzimanja: {{$rez->datum_preuzimanja}}
    </div>
    <div>
        Kranja destinacija: {{$rez->krajnja_destinacija}}
    </div>
    <div>
        Datum vracanja: {{$rez->datum_vracanja}}
    </div>
    <div>
        Broj dana: {{$rez->brDana}}
     </div>
     <div>
        Broj putnika: {{$rez->brPutnika}}
     </div>
     <div>
       Model: {{$rez->model}}
     </div>

    <a href="/automobil/public/rezervacije/{{$rez->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\RezervacijaController@destroy',$rez->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
