@extends('layouts.app')
@section('content')
    <h1> Izmeni automobil </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\AutomobilController@update',$rez->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('regBr','Registarski broj')}}
    <!--  oclass opet bootstrap-->
     {{Form::text('regBr',$rez->regBr,['class'=>'form-control','placeholder'=>'regBr'])}}
</div>
<div class="form-group">
     {{Form::label('godiste','Godiste')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('godiste',$rez->godiste, ['class'=>'form-control','placeholder'=>'godiste'])}}
</div>
<div class="form-group">
    {{Form::label('model','Model')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('model',$rez->model, ['class'=>'form-control','placeholder'=>'model'])}}
</div>
<div class="form-group">
    {{Form::label('opis','Opis')}}
    <!--  oclass opet bootstrap-->
    {{Form::text('opis',$rez->opis, ['class'=>'form-control','placeholder'=>'opis'])}}
<div class="form-group">
    {{Form::label('gorivo','Gorivo')}}
    <!--  oclass opet bootstrap-->
    {{ Form::text('gorivo', $rez->gorivo, ['class'=>'form-control','placeholder'=>'gorivo'])}}

</div>
<div class="form-group">
    {{Form::label('cena','Cena')}}
    <!--  oclass opet bootstrap-->
    {{ Form::text('cena', $rez->cena, ['class'=>'form-control','placeholder'=>'cena'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
