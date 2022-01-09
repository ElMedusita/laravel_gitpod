@extends("layouts.app")
@section("contenido")
    <h3>Nuevo concierto </h3>
    <form action="{{route('conciertos.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Id" value="ID" readonly>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" >
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha" >
        </div>
        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="text" class="form-control" id="hora" name="hora" placeholder="Hora" >
        </div>
        <div class="form-group">
            <label for="lugar">Lugar</label>
            <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Lugar" >
        </div>
        <div class="form-group">
            <label for="correo_electronico">Correo electrónico</label>
            <input type="text" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Correo electrónico" >
        </div>
        <div class="form-group">
            <label for="web">Web</label>
            <input type="text" class="form-control" id="web" name="web" placeholder="Web" >
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/conciertos')}}" class="btn btn-secondary">Volver</a>
    </form>
@endsection