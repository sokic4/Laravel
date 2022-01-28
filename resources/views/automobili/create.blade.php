@extends('layouts.app')
@section('content')
    <h1> Kreiraj novi automobil </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\AutomobilController@store'],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('regBr','Registarski broj')}}
        <!--  oclass opet bootstrap-->
         {{Form::text('regBr','',['class'=>'form-control','placeholder'=>'regBr'])}}
    </div>
    <div class="form-group">
         {{Form::label('godiste','Godiste')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('godiste','', ['class'=>'form-control','placeholder'=>'godiste'])}}
    </div>
    <div class="form-group">
        {{Form::label('model','Model')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('model','', ['class'=>'form-control','placeholder'=>'model'])}}
    </div>
    <div class="form-group">
        {{Form::label('opis','Opis')}}
        <!--  oclass opet bootstrap-->
        {{Form::text('opis','', ['class'=>'form-control','placeholder'=>'opis'])}}
    <div class="form-group">
        {{Form::label('gorivo','Gorivo')}}
        <!--  oclass opet bootstrap-->
        {{ Form::text('gorivo','', ['class'=>'form-control','placeholder'=>'gorivo'])}}

    </div>
    <div class="form-group">
        {{Form::label('cena','Cena')}}
        <!--  oclass opet bootstrap-->
        {{ Form::text('cena','', ['class'=>'form-control','placeholder'=>'cena'])}}
    </div>
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
