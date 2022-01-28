
@extends('layouts.app')
@section('content')
<html>
<head>
	<meta http-equiv="Content-Language" content="sr" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>O nama</title>
	<link rel="shortcut icon" href="../images/about.png">
</head>
 <body style="background-color:#e8ebec;">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" >Iznajmljivanje automobila</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li ><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"> </span> Početna</a></li>
					<li class="active"><a href="#">O nama</a></li>
                   <li><a href="{{url('/automobil')}}"><span class="glyphicon glyphicon-city"> </span> Automobili</a></li>
					<li><a href="{{url('/rezervacije')}}"> Rezervacija</a></li>

				</ul>
                <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
		</div>
			</div>
	</nav>
	<br>
	<br>
	<br>
	<br>
	<div class="container">
        <h3>Rent a car!</h3>
        {{-- <h3 align="left"  style="color:white" > {{$title}}</h3> --}}
        <img src="{{asset('/images/logo-rentacar.svg')}}" alt="Slika se ne moze prikazati" height="200"/>
		<div class="row"  align="center">

			<div class="col-md-6">
				<div id="dream-land" style="color:black" align="left">DOBRO DOŠLI U RENT A CAR. Možemo vam ponuditi vrlo udobna vozila, zavidnih performansi, koja će zadovoljiti vaše potrebe za sigurnošću na cesti. Vozila prilagođena gradskoj vožnji, s manjim ili većim brojem putnika, kao i ona na veće udaljenosti, ispuniće vaša očekivanja i pružiće vam maksimum.
                    Prema vašim potrebama možete izabrati:putnička vozila ili vozila sa vozačem. Redovnim servisom vodimo računa da su naša vozila uvek u dobrom stanju i našim klijentima pružamo maksimalno uživanje. Savršen izbor za poslovne ljude, porodicu s malom decom, turiste i avanturiste. Iznajmite auto agenciju koja će zadovoljiti vaše potrebe i odgovoriti na sve vaše zahteve.
                    Postoji mogućnost posebnog popust za duži period najma automobila.
				</div>
			</div>

		</div>
	</div>
	<br>
	<br>
<div class="container">
	<div class="row">
	</div>
</div>
<br>
<footer footer-fixed-down>
	<div class="container" >
		<div class="row">
			<div class="col-md-8" id="podaci">
				<ul>
					<li><span class="glyphicon glyphicon-pushpin" ></span> Vojvode Supljikca 15</li>
					<li><span class="glyphicon glyphicon-earphone"></span> 011/101 100</li>
					<li><span class="glyphicon glyphicon-phone"></span> 060/11 43 516</li>
					<li><span class="glyphicon glyphicon-envelope"></span> rentacar@yahoo.com</li>

				</ul>
			</div>
		</div>
	</div>
    <div >
        <p align="center">Copyright &copy; Laravel application</p>
    </div>
</footer>

</body>
</html>
@endsection

