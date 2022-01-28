@extends('layouts.app')
@section('content')
    <h1> Podaci o automobilima: </h1>
     @if(count($rez)>0)
    @foreach ($rez as $r)
        <div class="well">
            <h3> <a href = "/automobil/public/automobil/{{$r->id}}">Prikazi {{$r->regBr}}</a> </h3>
            <p> Model automobila: {{$r->model}} </p>
            <p> Godiste: {{$r->godiste}}</p>
            {{-- <p> Vrsta goriva: {{$r->gorivo}}</p>
            <p> Opis: {{$r->opis}}</p>
            <p> Cena: {{$r->cena}}</p> --}}

</div>
    @endforeach

    @endif

@endsection
