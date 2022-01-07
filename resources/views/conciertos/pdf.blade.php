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

<h2 id="titulot"> Tabla de sesiones</h2>
        <table id="tabla_conciertos" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Sesión</th>
                    <th>Precio</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Lugar</th>
                    <th>Correo de contacto</th>
                    <th>Web oficial</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conciertos as $concierto)
                    <tr>
                        <td>{{$concierto->id}}</td>
                        <th>{{$concierto->precio}}€</td>
                        <td>{{$concierto->fecha}}</td>
                        <td>{{$concierto->hora}}</td>
                        <td>{{$concierto->lugar}}</td>
                        <td>{{$concierto->correo_contacto}}</td>
                        <td>{{$concierto->web}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>

@endsection