<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveCursoRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getAll(){
        $cursos = Curso::all();
        return response()->json($cursos);
    }

    public function getById($id){
        $curso = Curso::find($id);
        if (!$curso){
            return response("Curso doesn´t exist", 401);
        }
        return $curso;
    }
    
    public function create(SaveCursoRequest $request){
        if ($request->fechaInicio > $request->fechaFin){
            return response("fechaInicio can´t be upper than fechaFin");
        }
        $curso = new Curso();
        $curso->nombre = $request->nombre; 
        $curso->fechaInicio = $request->fechaInicio; 
        $curso->fechaFin = $request->fechaFin; 

        $curso->save();
        return $curso;
    }
    
    public function update(Request $request, $id){
        $curso = $this->getById($id);
        $curso->nombre = $request->nombre ?? $curso->nombre; 
        $curso->fechaInicio = $request->fechaInicio ?? $curso->fechaInicio; 
        $curso->fechaFin = $request->fechaFin ?? $curso->fechaFin; 
        if ($curso->fechaInicio > $curso->fechaFin){
            return response("fechaInicio can´t be upper than fechaFin");
        }

        $curso->save();
        return $curso;
    }
    
    public function delete($id){
        $curso = $this->getById($id);
        $curso->delete();
        return response("Curso deleted");
    }
}
