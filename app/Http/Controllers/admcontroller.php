<?php

namespace App\Http\Controllers;

use App;
use App\Models;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admcontroller extends Controller
{
    public function administrador(){       
        return view('adm/home_adm');

    }
    public function historialtotal(){        
        $segui = App\Models\compra::all();
        return view('adm/historialtotal', compact('segui'));
    }

    public function personal(){
        // $nombre=$request->get('buscarpor');
        // // dd($nombre);
        
        // $us = user::where('name','like',"adm")->paginate(10);
        
        $us = App\Models\User::all();
        return view('adm/personal', compact('us'));
        
        // $us = User::paginate(1); //cantidad de columna a mostrar
    }

    public function personal2(){
        $us2 = App\Models\User::all();
        return view('adm/personal', compact('us2'));
    }



    public function editar($id){
        $pers=App\Models\User::findOrFail($id);
        return view('adm.editar', compact('pers'));
    }


    public function update(Request $request, $id){

        $pers=App\Models\User::findOrFail($id);

        $pers->name= $request->name;
        $pers->email= $request->email;
        $pers->password= $request->password;
        $pers->perfil= $request->perfil;
        $pers->remember_token= $request->remember_token;

        $pers->save();
        return redirect('adm/personal');

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






    
    public function editarcompra($id){
        $prod=App\Models\compra::findOrFail($id);
        return view('adm.editarcompra', compact('prod'));
    }

    public function updatecompra(Request $request, $id){

        $prod2=App\Models\compra::findOrFail($id);

        $prod2->variedad= $request->variedad;
        $prod2->tipo= $request->tipo;
        $prod2->categoria= $request->categoria;
        $prod2->embalaje= $request->embalaje;
        $prod2->descripcion= $request->descripcion;
        $prod2->rut_empresa= $request->rut_empresa;
        $prod2->nombre_empresa= $request->nombre_empresa;
        $prod2->direccion=  $request->direccion;
        $prod2->estado=  $request->estado;

        $prod2->save();
        
        return redirect('adm/historialtotal');

    }
}
