@extends("layouts.pdf")


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

<h2>Lista sesions</h2>
<table id="tabla_sesions" class="table table-striped table-bordered ">
    <thead>
        <tr>
        <th>Lugar</th>
                    <th>Fecha</th>
                    <th>Artista invitado</th>

        </tr>
    </thead>
    <tbody>
        @foreach($sesions as $sesion)
            <tr>
                <th>{{$sesion->concierto->lugar}}</td>
                <th>{{$sesion->concierto->fecha->format('d/m/Y')}}</td>
                <td>{{$sesion->artista->nombre}}</td>
            </tr>
        @endforeach
    </tbody>

</table>
   
@endsection