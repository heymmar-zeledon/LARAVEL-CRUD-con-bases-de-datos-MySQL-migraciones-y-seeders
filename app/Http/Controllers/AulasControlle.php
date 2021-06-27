<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class AulasControlle extends Controller
{
    public function formularioaulas(){
        $res = null;
        return view("formularioaulas")->with('res',$res);
    }

    public function mostrarlistaaulas(){
        $res = null;
        $listaaulas = DB::table('aulas')->get();
        return view('Aulas.listaaulas' , compact ('listaaulas'))->with('res',$res);
    }

    public function guardar(Request $request){

        if ($request->isMethod("post") && $request->has("addaula")){
            $id = $request->input('idaula');
            $listaaulas = DB::table('aulas')->get();
            $status = false;
            foreach($listaaulas as $aula)
            {
                if($aula->id == $id)
                {
                    $status = true;
                    break;
                }
            }
            if($status == true)
            {
                $res = "¡Ingrese un id de aula diferente a los ya registrados!";
                return view('formularioaulas')->with('res',$res);
            }
            else if($status == false)
            {
                $nombrea =$request->input('nombreaula');
                $ubicaciona = $request->input('ubicacionaula');
    
                $numfi =  DB::table('aulas')->insert(['id'=>$id, 'nombre'=>$nombrea, 'ubicacion'=>$ubicaciona]);
                $listaaulas = DB::table('aulas')->get();
                return view('Aulas.listaaulas', compact('listaaulas'));
            }  
        }
    }

    public function eliminar($idaeliminardeaula){
        $listax = DB::table('aulas')->where('id',$idaeliminardeaula)->delete();
        $listaaulas = DB::table('aulas')->get();

        return view('Aulas.listaaulas', compact('listaaulas'));
    }

    public function mostrar($idamostrar){

        $aula = DB::table('aulas')->where('id',$idamostrar)->get()[0];
        return view('formularioaulasaeditar', compact('aula'));
    }

    public function actualizar(Request $request, $idaactualizar){
        $nombrea =$request->input('nombreaula');
        $ubicaciona = $request->input('ubicacionaula');
        $numfi =  DB::table('aulas')->where('id',$idaactualizar)->update(['nombre'=>$nombrea, 'ubicacion'=>$ubicaciona]);

        $listaaulas = DB::table('aulas')->get();
        return view('Aulas.listaaulas', compact('listaaulas'));

    }
}
