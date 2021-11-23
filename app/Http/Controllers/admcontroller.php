<?php

namespace App\Http\Controllers;

use App;
use App\Models;
use Illuminate\Http\Request;

class admcontroller extends Controller
{
    public function administrador(){
        
        return view('adm/home_adm');
        // $p = App\Models\prueba::all();

        // return view('adm/home_adm', compact('p'));
    }

    public function personal(){
        // return view('adm/personal');
        $us = App\Models\User::all();
        return view('adm/personal', compact('us'));
    }

    public function editar($id){
        $nota=App\Models\User::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }


    public function eliminar($id){

        $notaEliminar = App\Models\User::findOrFail($id);
        $notaEliminar->delete();
    
        return back()->with('mensaje', 'Nota Eliminada');
    }


    public function agregarpersonal(Request $request){
            $pers = new App\Models\User;
            $pers->name=$request->name;
            $pers->email=$request->email;
            $pers->password=$request->password;
            $pers->perfil=$request->perfil;
    
            $pers->save();
            return back();
        }
}
