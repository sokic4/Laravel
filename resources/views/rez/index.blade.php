@extends('layouts.app')
@section('content')
    <h1> Rezervacije </h1>
     @if(count($rez)>0)
    @foreach ($rez as $r)
        <div class="well">
            <h3> <a href = "/automobil/public/rezervacije/{{$r->id}}">Prikazi nosioca rezervacije: {{$r->ime}}{{$r->prezime}}</a> </h3>
            <p> Model: {{$r->model}}</p>
           <p>  Polazna destinacija: {{$r->polazna_destinacija}}</p>
           <p>  Kranja destinacija: {{$r->krajnja_destinacija}}</p>
            <p> Broj prijavljenih putnika: {{$r->brPutnika}}</p>
            <p> Broj dana u zakup: {{$r->brDana}} </p>
</div>
    @endforeach

    @endif

@endsection
