<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;

class formulario_controlador extends Controller
{
    //
    public function formulario_datos(Request $request){
        $this->validate($request,[
            'nombre'=>"required|string|unique:formularios,nombre",
            'edad'=>"required|integer"
        ]);
        Formulario::create(
          $request->all()
        );
        return(view('pages.formpost'));
    }
}
