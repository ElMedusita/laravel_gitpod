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

    <h3>Nueva reserva </h3>
    <form action="{{route('reservas.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Id" value="ID" readonly>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
        </div>
        <div class="form-group">
            <label for="fecha_reserva">Fecha Reserva</label>
            <input type="date" class="form-control" id="fecha_reserva" name="fecha_reserva" placeholder="Fecha Reserva" >
        </div>
        <div class="form-group">
            <label for="hora_reserva">Hora Reserva</label>
            <input type="text" class="form-control" id="hora_reserva" name="hora_reserva" placeholder="Hora Reserva" >
        </div>
        <div class="form-group">
        
            <label>Sesión de concierto</label>
            <select  class="form-control" name='concierto_id'>
     
                @foreach ($conciertos as $concierto)
                    <option value='{{$concierto->id}}'>{{$concierto->id}}</option>
                @endforeach
            </select>
            {!! $errors->first('concierto_id', '<div class="invalid-feedback">:message</p>') !!}

        
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/reservas')}}" class="btn btn-secondary">Volver</a>
    </form>
@endsection