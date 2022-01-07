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
        <a href=" {{url('/')}}" class="btn btn-primary" padding="10px">Regreso</a>
        <table id="tabla_sesions" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Sesión</th>
                    <th>Artista invitado</th>

                </tr>
            </thead>
            <tbody>
                @foreach($sesions as $sesion)
                    <tr>
                        <th>{{$sesion->concierto_id}}</td>
                        <td>{{$sesion->artista_id}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay sesions</h1>
    @endif
   

@endsection