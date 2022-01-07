@extends("layouts.app")


@section("contenido")

<style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 10px;
        }
        #titulot{
            text-align:center;
            text-decoration:underline;
        }
    </style>


<h1 id="titulot">Artistas invitados</h1>
        <table id="tabla_artistas" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Procedencia</th>
                    <th>Fecha Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($artistas as $artista)
                    <tr>
                        <td>{{$artista->id}}</td>
                        <td>{{$artista->nombre}}</td>
                        <td>{{$artista->email}}</td>
                        <td>{{$artista->telefono}}</td>
                        <td>{{$artista->procedencia}}</td>
                        <td>{{$artista->fecha_nacimiento}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>

@endsection