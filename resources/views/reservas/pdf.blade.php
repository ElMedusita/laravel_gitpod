@extends("layouts.app")


@section("contenido")

<style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
        }
        #titulot{
            text-align:center;
            text-decoration:underline;
        }
    </style>

<h2>Lista reservas</h2>
<table id="tabla_reservas" class="table table-striped table-bordered ">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre cliente</th>
            <th>Fecha reserva</th>
            <th>Hora reserva</th>
            <th>Sesión</th>

        </tr>
    </thead>
    <tbody>
        @foreach($reservas as $reserva)
            <tr>
                <td>{{$reserva->id}}</td>
                <th>{{$reserva->nombre}}</td>
                <td>{{$reserva->fecha_reserva}}</td>
                <td>{{$reserva->hora_reserva}}</td>
                <td>{{$reserva->concierto_id}}</td>
            </tr>
        @endforeach
    </tbody>

</table>
   
@endsection