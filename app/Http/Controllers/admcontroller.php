<?php

namespace App\Http\Controllers;

use App;
use App\Models;
use Illuminate\Http\Request;

class admcontroller extends Controller
{
    public function administrador(){
        $p = App\Models\prueba::all();

        return view('adm/home_adm', compact('p'));
    }

    public function usuarios(){

        $dato = App\Models\datos::all();

        return view('adm/usuarios', compact('dato'));
    }

    public function personal(){
   
        $usuario = App\Models\usuarios::all();
        return view('adm/personal', compact('usuario'));
    }

    
    public function agregarpersonal(Request $request){
        $pers = new App\Models\usuarios;
        $pers->name=$request->name;
        $pers->email=$request->email;
        $pers->password=$request->password;

        $pers->save();
        return back();
    }

//     public function editarpersonal($id){
//         $usuario=App\Models\usuarios::findOrFail($id);
//         return view('editarpersonal', compact('usuario'));
//    }


    
    public function agregar(Request $request)
    {
       /*  dd($request); */
       $validated = $request->validate(
           [
            'rut_empresa'=>'required|min:5|max:10',
            'nombre_empresa'=>'required',
            'telefono_empresa'=>'required',
            'ciudad'=>'required',
            'nombre'=>'required',
            'rut'=>'required',
            'email'=>'required',
            'password'=>'required',
           ]
           );
        $datoNueva = new App\Models\datos;
        $datoNueva->rut_empresa=$request->rut_empresa;
        $datoNueva->nombre_empresa=$request->nombre_empresa;
        $datoNueva->telefono_empresa=$request->telefono_empresa;
        $datoNueva->ciudad=$request->ciudad;
        $datoNueva->nombre=$request->nombre;
        $datoNueva->rut=$request->rut;
        $datoNueva->email=$request->email;
        $datoNueva->password=$request->password;
        
        $datoNueva->save();
        return back()->with('mensaje','Usuario creado');
    }

    


}
