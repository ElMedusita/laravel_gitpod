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
</style>
<div class="text-center">
    <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white">
        <img src="https://www.resurrectionfest.es/media/Resurrection-Fest-Logo1.png">
    </h2>
    <h2>
    <img src="https://64.media.tumblr.com/ba0325b86debbb69e57540e2aace4aaa/tumblr_orw1915Lvv1s9y3qio1_400.gif">
        <img src="https://c.tenor.com/hpekZVJGVwUAAAAC/pastis-dj.gif" width="320" height="180">
    </h2>
    <h2 class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
        
    </h2>

</div>
<div class="text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>Registro de festejos de Resurrection Fest ©</h2></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a class="btn btn-info" href="{{ route('artistas.index') }}">Artistas</a>
                        &nbsp;
                        <a class="btn btn-info" href="{{ route('conciertos.index') }}">Conciertos</a>
                        &nbsp;
                        <a class="btn btn-info" href="{{ route('reservas.index') }}">Reservas</a>
                        &nbsp;
                        <a class="btn btn-info" href="{{ route('sesions.index') }}">Registro festejos</a>
                    </div>
                    <h2><a class="btn btn-success" href="https://www.resurrectionfest.es">Web oficial</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
