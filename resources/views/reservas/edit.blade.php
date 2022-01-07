@extends("layouts.app")

@section("contenido")
    <h3>Editar reserva </h3>
    <form action="{{url('/reservas/')}}/{{$reserva->id}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$reserva->nombre}}">
        </div>
        <div class="form-group">
            <label for="fecha_reserva">Fecha reserva</label>
            <input type="text" class="form-control" id="fecha_reserva" name="fecha_reserva" placeholder="fecha_reserva" value="{{$reserva->fecha_reserva}}">
        </div>
        <div class="form-group">
            <label for="hora_reserva">Hora Reserva</label>
            <input type="text" class="form-control" id="hora_reserva" name="hora_reserva" placeholder="hora_reserva" value="{{$reserva->hora_reserva}}">
        </div>
        <div class="form-group">
            <label for="concierto_id">Sesión</label>
            <input type="text" class="form-control" id="concierto_id" name="concierto_id" placeholder="concierto_id" value="{{$reserva->concierto_id}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/reservas')}}" class="btn btn-secondary">Cancelar</a>
@endsection