@extends('ejemploplantilla')
 
@section('contenido')
<a type="button" class="btn btn-primary" href="{{url('/aulas/nueva')}}">Nuevo</a>
<hr>
<h1>Aulas</h1>
<table class="table table-bordered">
    @forelse($listaaulas as $aula)
    <tr align='center' style="font-family: Roboto;">
        <div class="bg-warning">
            <span>ID:</span> <input type="text" name="idaula" value="{{$aula->id}}" readonly>
            <span>Nombre: </span> <input type="text" name="nombrea" value="{{$aula->nombre}}" readonly>
            <span>Ubicación: </span><input type="text" name="ubicacionaula" value="{{$aula->ubicacion}}" style="width: 35%;" readonly>
            <a href="{{url('/aulas/eliminar/'.$aula->id)}}" class="btn btn-danger">Borrar</a>&nbsp;&nbsp;
            <a href="{{url('/aulas/actualizar/'.$aula->id)}}" class="btn btn-primary">Editar</a>
        </div>
        <br>
    </tr>
    @empty
    <p>No hay Registros<p>
    @endforelse
</table>
@endsection
