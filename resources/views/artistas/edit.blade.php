@extends("layouts.app")

@section("contenido")
    <h3>Editar artista </h3>
    <form action="{{url('/artistas/')}}/{{$artista->id}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$artista->nombre}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$artista->email}}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="{{$artista->telefono}}">
        </div>
        <div class="form-group">
            <label for="procedencia">Procedencia</label>
            <input type="text" class="form-control" id="procedencia" name="procedencia" placeholder="procedencia" value="{{$artista->procedencia}}">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha Nacimiento" value="{{$artista->fecha_nacimiento}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/artistas')}}" class="btn btn-secondary">Cancelar</a>
@endsection