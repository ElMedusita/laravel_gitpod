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
        $('#tabla_reservas').DataTable( {
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
                        url   : "{{url('/reservas')}}/"+id,
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
    <h1 id="titulot"> Tabla de las reservas</h1>
    @if(count($reservas)>0)
        <a href=" {{url('/')}}" class="btn btn-primary" padding="10px">Regreso</a>
        &nbsp;
        <a href=" {{url('/reservas/pdf')}}" class="btn btn-primary" padding="10px">PDF</a>
        &nbsp;
        <a href=" {{url('/reservas/create')}}" class="btn btn-primary" padding="10px">Nueva reserva</a>
        
        <table id="tabla_reservas" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre cliente</th>
                    <th>Fecha reserva</th>
                    <th>Hora reserva</th>
                    <th>Sesión</th>
                    <th data_orderable="false">Editar</th>
                    <th data_orderable="false">Borrar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr data-id='{{$reserva->id}}'>
                        <td>{{$reserva->id}}</td>
                        <th>{{$reserva->nombre}}</td>
                        <td>{{$reserva->fecha_reserva}}</td>
                        <td>{{$reserva->hora_reserva}}</td>
                        <td>{{$reserva->concierto_id}}</td>
                        <td><a href="{{url('/reservas')}}/{{$reserva->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td> 
                        <td class="borrar"><form method="POST" action="{{url('/reservas')}}/{{$reserva->id}}">
                                @csrf
                                @method("delete")
                                <input  type="image" width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png">
                        </form></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay reservas</h1>
    @endif
   

@endsection