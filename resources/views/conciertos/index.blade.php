@extends("layouts.app")


@section("contenido")
<br>
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

<script>
    $(document).ready(function() {
        $('#tabla_conciertos').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });
    } );
    </script>



</head>
<body>
    <h1 id="titulot"> Tabla de sesiones</h1>
    @if(count($conciertos)>0)
        <a href=" {{url('/')}}" class="btn btn-primary" padding="10px">Regreso</a>
        &nbsp;
        <a href=" {{url('/conciertos/pdf')}}" class="btn btn-primary" padding="10px">PDF</a>
        
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
                    <th>Editar</th>
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
                        <td><a href="{{url('/conciertos')}}/{{$concierto->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td> 

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay conciertos</h1>
    @endif
   

@endsection