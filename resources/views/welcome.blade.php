@extends('layouts.app')


@section('content')
<style>
    body {
        background: url(https://s.libertaddigital.com/2020/05/15/1920/1080/fit/resurrection-fest-estrella-galicia-2018-kiss-toni-villen.jpg); 
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        height: 100vh;
    }
    .chachi {
        position:absolute;
        left:38%;
        top:95%;
        bottom:30%;
        width:60%;
        height:10%;
        text-align:right;
    }
    .btn-holder a {
        text-decoration: none;
        color: black;
    }
    h3 {
        color: white;
    }
</style>
<div class="text-center">
    <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white">
        <img src="https://www.resurrectionfest.es/media/Resurrection-Fest-Logo1.png">
    </h2>
    <h2 class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
        
    </h2>

</div>
<div class="text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Se requiere inicio de sesión para acceder</h2></div>

                    <div class="card-body">
                        <a class="btn btn-info" href="{{ route('home') }}">Acceso al sistema de gestión</a>
                        &nbsp;
                        <a class="btn btn-success" href="https://www.resurrectionfest.es">Web oficial</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="chachi">
  <div class="btn-holder">
    <a href="https://lastfm.freetls.fastly.net/i/u/770x0/32be2c9293c44a17b4c75d11e0bcf87b.jpg">.</a>
  </div>
</div>
<div class="title m-b-md">
    <h3>¡Comparte con tus amigos!</h3>
   {!!QrCode::size(300)->generate("https://www.resurrectionfest.es/") !!}
</div>

@endsection
