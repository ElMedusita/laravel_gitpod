@extends("layouts.app")
@section("contenido")
    <h3>Nueva reserva </h3>
    <form action="{{route('artistas.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
        </div>
        <div class="form-group">
            <label for="fecha_reserva">Fecha Reserva</label>
            <input type="text" class="form-control" id="fecha_reserva" name="fecha_reserva" placeholder="Fecha Reserva" >
        </div>
        <div class="form-group">
            <label for="hora_reserva">Hora Reserva</label>
            <input type="text" class="form-control" id="hora_reserva" name="hora_reserva" placeholder="Hora Reserva" >
        </div>
        <div class="form-group">
            <label for="codigo_concierto">Sesión</label>
            <input type="text" class="form-control" id="codigo_concierto" name="codigo_concierto" placeholder="Código concierto" >
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/artistas')}}" class="btn btn-secondary">Volver</a>
    </form>
@endsection