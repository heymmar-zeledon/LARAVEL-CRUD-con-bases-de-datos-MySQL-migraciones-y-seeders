@extends('ejemploplantilla')
 
@section('contenido')
<a type="button" class="btn btn-success" href="{{url('/maestros/nuevo')}}">Nuevo</a>&nbsp;&nbsp;&nbsp;
<hr>

<table class="table table-bordered">
    <tr><th><h1>Profesores</h1></th></tr>
    @forelse($listaprofesores as $profesor)
    <tr>
        <th><div class="bg-warning">
            <span>ID:</span> <input type="text" name="idmaestro"  value="{{$profesor->id}}"  readonly>&nbsp;&nbsp;&nbsp;
            <span>Nombre: </span> <input type="text" name="nombremaestro" value="{{$profesor->nombre}}"  readonly>&nbsp;&nbsp;&nbsp;
            <span>Apellido: </span><input type="text" name="apellidomaestro"  value="{{$profesor->apellido}}"  readonly>&nbsp;&nbsp;&nbsp;
            <span>Titulo: </span> <input type="text" name="titulomaestro"  value="{{$profesor->titulo}}" style="width: 5%;" readonly>&nbsp;&nbsp;&nbsp;
            <a href="{{url('/maestros/eliminar/'.$profesor->id)}}" class="btn btn-danger">Borrar</a>&nbsp;<a href="{{url('/maestros/actualizar/'.$profesor->id)}}" class="btn btn-primary">Editar</a>
        </div>
        </th>
    </tr>
    @empty
        <p>No hay Registros<p>
    @endforelse
</table>
@endsection