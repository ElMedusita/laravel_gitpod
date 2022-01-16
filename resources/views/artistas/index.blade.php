
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
        $('#tabla_artistas').DataTable( {
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
                        url   : "{{url('/artistas')}}/"+id,
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
    <h1 id="titulot"> Registro de artistas</h1>
    @if(count($artistas)>0)
        <a href=" {{url('/home')}}" class="btn btn-secondary" padding="10px">Regreso</a>
        &nbsp;
        <a href=" {{url('/artistas/pdf')}}" class="btn btn-outline-info float-right" padding="10px">Generar documento PDF</a>
        &nbsp;
        <a href=" {{url('/artistas/create')}}" class="btn btn-primary" padding="10px">Nueva artista</a>
        
        <table id="tabla_artistas" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Procedencia</th>
                    <th>Fecha nacimiento</th>
                    <th>Edad</th>
                    <th data_orderable="false">Editar</th>
                    <th data_orderable="false">Borrar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($artistas as $artista)
                    <tr data-id='{{$artista->id}}'>
                        <td>{{$artista->id}}</td>
                        <th>{{$artista->nombre}}</td>
                        <td>{{$artista->email}}</td>
                        <td>{{$artista->telefono}}</td>
                        <td>{{$artista->procedencia}}</td>
                        <td>{{$artista->fecha_nacimiento->format('d/m/Y')}}</td>
                        <td>{{$artista->fecha_nacimiento->age}} años</td>
                        <td><a href="{{url('/artistas')}}/{{$artista->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td> 
                        <td class="borrar"><form method="POST" action="{{url('/artistas')}}/{{$artista->id}}">
                                @csrf
                                @method("delete")
                                <input  type="image" width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png">
                        </form></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay artistas</h1>
    @endif
   

@endsection