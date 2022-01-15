@extends("layouts.app")


@section("contenido")
<br>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
        }
        #titulo{
            text-align:center;
            text-decoration:underline;
        }
    </style>

<script>
    $(document).ready(function() {
        $('#tabla_sesions').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });
    } );
    </script>


</head>
<body>
    <h1 id="titulo"> Registro de festejos</h1>
    @if(count($sesions)>0)
    <a href=" {{url('/')}}" class="btn btn-secondary" padding="10px">Regreso</a>
        &nbsp;
        <a href=" {{url('/sesions/pdf')}}" class="btn btn-outline-info float-right" padding="10px">Generar documento PDF</a>
        <table id="tabla_sesions" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>ID concierto</th>
                    <th>Sesión</th>
                    <th>Artista invitado</th>

                </tr>
            </thead>
            <tbody>
                @foreach($sesions as $sesion)
                    <tr>
                        <th>{{$sesion->concierto->id}}</td>
                        <th>{{$sesion->concierto->lugar}} - {{$sesion->concierto->fecha->format('d/m/Y')}}</td>
                        <td>{{$sesion->artista->nombre}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay sesions</h1>
    @endif
   

@endsection