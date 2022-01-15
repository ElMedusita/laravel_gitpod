@extends("layouts.app")

@section("contenido")
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>Editar reserva </h3>
    <form action="{{url('/reservas/')}}/{{$reserva->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$reserva->id}}" readonly>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$reserva->nombre}}">
        </div>
        <div class="form-group">
            <label for="fecha_reserva">Fecha reserva</label>
            <input type="date" class="form-control" id="fecha_reserva" name="fecha_reserva" placeholder="fecha_reserva" value="{{$reserva->fecha_reserva}}">
        </div>
        <div class="form-group">
            <label for="hora_reserva">Hora Reserva</label>
            <input type="text" class="form-control" id="hora_reserva" name="hora_reserva" placeholder="hora_reserva" value="{{$reserva->hora_reserva}}">
        </div>
        <div class="form-group">
        
            <label>ID concierto</label>
            <select  class="form-control" name='concierto_id'>
     
                @foreach ($conciertos as $concierto)
                    <option value='{{$concierto->id}}'>{{$concierto->id}}</option>
                @endforeach
            </select>
            {!! $errors->first('concierto_id', '<div class="invalid-feedback">:message</p>') !!}

        
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/reservas')}}" class="btn btn-secondary">Cancelar</a>
@endsection