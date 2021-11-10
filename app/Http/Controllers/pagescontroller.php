<?php

namespace App\Http\Controllers;

use App;
use App\Models;
use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function create(){
        return view('create');
    }

    public function agregar(Request $request)
    {
        dd($request);
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
        return back();
    }

    public function editar($id){
        return "hola";
        // $nota = App\Models\usuarios::findOrFail($id);
        // return view('notas.editar', compact('nota'));
    }
    
}
