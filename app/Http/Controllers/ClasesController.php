<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ClasesController extends Controller
{


    public function mostrarlistaclases(){
        $listaclases = DB::table('clases')->get();
        return view('Clases.listaclases', compact('listaclases'));
    }

    public function formularioclases(){
        $res = null;
        return view ('formularioclases')->with('res',$res);
    }

    public function guardar(Request $request)
    {
        if ($request->isMethod("post") && $request->has("addclase")){
            $codclase = $request->input('codclase');
            $listaclases = DB::table('clases')->get();
            $status = false;
            foreach($listaclases as $clase)
            {
                if($clase->codclase == $codclase)
                {
                    $status = true;
                    break;
                }
            }
            if($status == true)
            {
                $res = "¡Ingrese un id de clase diferente a los ya registrados!";
                return view('formularioclases')->with('res',$res);
            }
            else if($status == false)
            {
                $nombre =$request->input('nombreclase');
                $credito = $request->input('creditoclase');
        
                $numfi =  DB::table('clases')->insert(['codclase'=>$codclase, 'nombre'=>$nombre, 'credito'=>$credito]);
                $listaclases = DB::table('clases')->get();
                return view('Clases.listaclases', compact('listaclases'));
            }  
        }
    }

    public function eliminar($codclase){

        $listaclases = DB::table('clases')->where('codclase',$codclase)->delete();
        $listaclases = DB::table('clases')->get();

        return view('Clases.listaclases', compact('listaclases'));

    }

    public function actualizar(Request $request, $codclase){

        $nombre =$request->input('nombreclase');
        $credito = $request->input('creditoclase');

        $numfi =  DB::table('clases')->where('codclase',$codclase)->update(['nombre'=>$nombre, 'credito'=>$credito]);

        $listaclases = DB::table('clases')->get();
        return view('Clases.listaclases', compact('listaclases'));

    }

    public function mostrar($codclaseamostrar){

        $clase = DB::table('clases')->where('codclase',$codclaseamostrar)->get()[0];
        return view('formularioeditarclase', compact('clase'));
    
    }
}
