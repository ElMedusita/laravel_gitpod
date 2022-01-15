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

        $(".borrar").click(function(e){
            e.preventDefault();
            const tr=$(this).closest("tr");
            const id=tr.data("id");
            Swal.fire({
                title: '¿Quieres borrarlo?',
                showCancelButton: true,
                confirmButtonText: 'Eliminar',
                cancelButtonText: `Cancelar`,
            }).then((result) => {
                console.log(result)
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url   : "{{url('/conciertos')}}/"+id,
                        data  : {
                            _token: "{{csrf_token()}}",
                            _method: "delete",
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    });
                } 
            })
        });

    } );
    </script>



</head>
<body>
    <h1 id="titulot"> Registro de conciertos</h1>
    @if(count($conciertos)>0)
        <a href=" {{url('/')}}" class="btn btn-secondary" padding="10px">Regreso</a>
        &nbsp;
        <a href=" {{url('/conciertos/pdf')}}" class="btn btn-outline-info float-right" padding="10px">Generar documento PDF</a>
        &nbsp;
        <a href=" {{url('/conciertos/create')}}" class="btn btn-primary" padding="10px">Nueva concierto</a>
        
        <table id="tabla_conciertos" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sesión</th>
                    <th>Precio</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Lugar</th>
                    <th>Correo de contacto</th>
                    <th>Web oficial</th>
                    <th data_orderable="false">Editar</th>
                    <th data_orderable="false">Borrar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($conciertos as $concierto)
                    <tr data-id='{{$concierto->id}}'>
                        <td>{{$concierto->id}}</td>
                        <td>{{$concierto->lugar}} - {{$concierto->fecha->format('d/m/Y')}}</td>
                        <th>{{$concierto->precio}}€</td>
                        <td>{{$concierto->fecha->format('d/m/Y')}}</td>
                        <td>{{$concierto->hora}}</td>
                        <td>{{$concierto->lugar}}</td>
                        <td>{{$concierto->correo_contacto}}</td>
                        <td>{{$concierto->web}}</td>
                        <td><a href="{{url('/conciertos')}}/{{$concierto->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td> 
                        <td class="borrar"><form method="POST" action="{{url('/conciertos')}}/{{$concierto->id}}">
                                @csrf
                                @method("delete")
                                <input  type="image" width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png">
                        </form></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay conciertos</h1>
    @endif
   

@endsection