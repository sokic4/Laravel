@extends('layouts.app')
@section('content')
    <h1> Izmeni rezervaciju </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\RezApiController@update',$rez->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('ime','Ime')}}
    <!--  oclass opet bootstrap-->
     {{Form::text('ime',$rez->ime,['class'=>'form-control','placeholder'=>'ime'])}}
</div>
<div class="form-group">
     {{Form::label('prezime','Prezime')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('prezime',$rez->prezime, ['class'=>'form-control','placeholder'=>'prezime'])}}
</div>
<div class="form-group">
    {{Form::label('polazna_destinacija','Polazna destinacija')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('polazna_destinacija',$rez->polazna_destinacija, ['class'=>'form-control','placeholder'=>'polazna_destinacija'])}}
</div>
<div class="form-group">
    {{Form::label('krajnja','Krajnja destinacija')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('krajnja_destinacija',$rez->krajnja_destinacija, ['class'=>'form-control','placeholder'=>'krajnja_destinacija'])}}
</div>
<div class="form-group">
    {{Form::label('datum_preuzimanja','Datum preuzimanja')}}
    <!--  oclass opet bootstrap-->
    {{ Form::date('datum_preuzimanja', $rez->datum_preuzimanja, ['class'=>'form-control','placeholder'=>'datum_preuzimanja'])}}
</div>
<div class="form-group">
    {{Form::label('datum_vracanja','Datum vracanja')}}
    <!--  oclass opet bootstrap-->
    {{ Form::date('datum_vracanja', $rez->datum_vracanja, ['class'=>'form-control','placeholder'=>'datum_vracanja'])}}
</div>
<div class="form-group">
    {{Form::label('brDana','Broj dana')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('brDana',$rez->brDana, ['class'=>'form-control','placeholder'=>'brDana'])}}
</div>
<div class="form-group">
    {{Form::label('brPutnika','Broj putnika')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('brPutnika',$rez->brPutnika, ['class'=>'form-control','placeholder'=>'brPutnika'])}}
</div>
<div class="form-group">
    {{Form::label('model','Model')}}
    <!--  oclass opet bootstrap-->
    {{Form::textarea('model',$rez->model, ['class'=>'form-control','placeholder'=>'model'])}}
</div>
<div class="form-group">
    {{Form::label('automobil_id','Automobil id')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('automobil_id',$rez->automobil_id, ['class'=>'form-control','placeholder'=>'automobil_id'])}}
</div>
<div class="form-group">
    {{Form::label('user_id','User id')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('user_id',$rez->user_id, ['class'=>'form-control','placeholder'=>'user_id'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
