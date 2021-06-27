<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;



class MaestroController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function formulariomaestro(){
        $res = null;
        return view('formulariomaestro')->with('res',$res);

    }
    public function mostrarlista(){  
        $listaprofesores = DB::table('profesores')->get();
        return view('Maestros.listamaestros', compact('listaprofesores'));
    }

    public function eliminar($idealiminar){
        $listax = DB::table('profesores')->where('id',$idealiminar)->delete();

        $listaprofesores = DB::table('profesores')->get();
        return view('Maestros.listamaestros', compact('listaprofesores'));
    }

    public function guardar(Request $request){

        if($request->isMethod("post") && $request->has("addprof")){
            $id = $request->input('idmaestro');
            $listaprofesores = DB::table('profesores')->get();
            $status = false;
            foreach($listaprofesores as $profesor)
            {
                if($profesor->id == $id)
                {
                    $status = true;
                    break;
                }
            }
            if($status == true)
            {
                $res = "¡Ingrese un id de profesor diferente a los ya registrados!";
                return view('formulariomaestro')->with('res',$res);
            }
            else if($status == false)
            {
                $nombre =$request->input('nombremaestro');
                $apellido = $request->input('apellidomaestro');
                $titulo = $request->input('titulo');

                $numfi =  DB::table('profesores')->insert(['id'=>$id, 'nombre'=>$nombre, 'apellido'=>$apellido,'titulo'=>$titulo]);
                $listaprofesores = DB::table('profesores')->get();
                return view('Maestros.listamaestros', compact('listaprofesores'));
            }  
        }
    }

    public function mostrar($idx){

        $profesor = DB::table('profesores')->where('id',$idx)->get()[0];
        return view('formularioaediatr', compact('profesor'));

    }

    public function actualizar(Request $request, $idaeditar){

        $nombre =$request->input('nombremaestro');
        $apellido = $request->input('apellidomaestro');
        $titulo = $request->input('titulo');

        $numfi =  DB::table('profesores')->where('id',$idaeditar)->update(['nombre'=>$nombre, 'apellido'=>$apellido,'titulo'=>$titulo]);

        $listaprofesores = DB::table('profesores')->get();
        return view('Maestros.listamaestros', compact('listaprofesores'));
    }

    public function mostrarlista2(){  
        $listaprofesores = DB::table('profesores')->get();
        return view('Maestros.ListaDetallada', compact('listaprofesores'));
    }
}
