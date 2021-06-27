@extends('ejemploplantilla')
 
@section('contenido')
<a type="button" class="btn btn-primary" href="{{url('/clases/nueva')}}">Nuevo</a>
<hr>
<h1>Clases</h1>

<table class="table table-bordered">
    @foreach($listaclases as $clase)

    <tr align='center' style="font-family: Roboto;">
        <div class="bg-warning">
            <span>Codclase: </span> <input type="text" name="codclase" value="{{$clase->codclase}}" readonly>
            <span>Nombre: </span> <input type="text" name="nombre" value="{{$clase->nombre}}" style="width: 30%;" readonly>
            <span>Crédito: </span><input type="text" name="creditoclase" value="{{$clase->credito}}" readonly>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="{{url('/clases/eliminar/'.$clase->codclase)}}" class="btn btn-danger">Borrar</a>&nbsp;<a href="{{url('/clases/actualizar/'.$clase->codclase)}}" class="btn btn-primary">Editar</a>
        </div>
        <br>
    </tr>
    @endforeach
</table>
@endsection