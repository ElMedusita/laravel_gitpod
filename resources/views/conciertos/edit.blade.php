@extends("layouts.app")

@section("contenido")
    <h3>Editar concierto </h3>
    <form action="{{url('/conciertos/')}}/{{$concierto->id}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" placeholder="precio" value="{{$concierto->precio}}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha concierto</label>
            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="{{$concierto->fecha}}">
        </div>
        <div class="form-group">
            <label for="hora">Hora concierto</label>
            <input type="text" class="form-control" id="hora" name="hora" placeholder="hora" value="{{$concierto->hora}}">
        </div>
        <div class="form-group">
            <label for="lugar">Lugar</label>
            <input type="text" class="form-control" id="lugar" name="concierto_id" placeholder="lugar" value="{{$concierto->lugar}}">
        </div>
        <div class="form-group">
            <label for="correo_contacto">Correo contacto</label>
            <input type="text" class="form-control" id="correo_contacto" name="correo_contacto" placeholder="correo_contacto" value="{{$concierto->correo_contacto}}">
        </div>
        <div class="form-group">
            <label for="web">Web</label>
            <input type="text" class="form-control" id="web" name="web" placeholder="web" value="{{$concierto->web}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/conciertos')}}" class="btn btn-secondary">Cancelar</a>
@endsection