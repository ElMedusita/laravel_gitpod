@extends("layouts.app")
@section("contenido")
    <h3>Nuevo artista </h3>
    <form action="{{route('artistas.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Id" >
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" >
        </div>
        <div class="form-group">
            <label for="procedencia">Procedencia</label>
            <input type="text" class="form-control" id="procedencia" name="procedencia" placeholder="Procedencia" >
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha nacimiento" >
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/artistas')}}" class="btn btn-secondary">Volver</a>
    </form>
@endsection