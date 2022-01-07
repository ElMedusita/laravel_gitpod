@extends("layouts.app")


@section("contenido")
       <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white">
                    <img src="https://www.resurrectionfest.es/media/Resurrection-Fest-Logo1.png">
                </h2>
                <h2>
                    <img src="https://i.makeagif.com/media/5-29-2016/yCeMm_.gif">
                    <img src="https://www.resurrectionfest.es/media/RF20-WebFooter-Experiencia-ENG.jpg" width="400" height="224">
                </h2>
                <h2 class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
                    Registro de festejos de Resurrection Fest ©
                </h2>
                <a class="btn btn-success" href="{{ route('artistas.index') }}">Artistas</a>
                <a class="btn btn-success" href="{{ route('conciertos.index') }}">Conciertos</a>
                <a class="btn btn-success" href="{{ route('reservas.index') }}">Reservas</a>
                <a class="btn btn-success" href="{{ route('sesions.index') }}">Registro festejos</a>
            </div>
            <h2><a class="btn btn-success" href="https://www.resurrectionfest.es">Web oficial</a></h2>
        </div>
    </div>
@endsection
