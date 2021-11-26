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
        // $p = App\Models\prueba::all();

        // return view('adm/home_adm', compact('p'));
    }

    public function personal(){
        // return view('adm/personal');
        $us = App\Models\User::all();
        return view('adm/personal', compact('us'));
    }

    public function editar($id){
        $pers=App\Models\User::findOrFail($id);
        return view('adm.editar', compact('pers'));
    }

    public function update(Request $request, User $notaupdate){

        // return User::create([
        //     'password' => Hash::make($notaupdate['password']),
        // ]);

        $notaupdate->name= $request->name;
        $notaupdate->email= $request->email;
        $notaupdate->perfil= $request->perfil;
        $notaupdate->password= $request->password;

        $notaupdate->save();
        return redirect()->route('adm.editarpersonal');

    }

    // public function update(Request $request, $id){
    //     $notaupdate = App\Models\User::findOrFail($id);
    //     $notaupdate->name= $request->name;
    //     $notaupdate->email= $request->email;
    //     $notaupdate->perfil= $request->perfil;

    //     $notaupdate->save();
    //     return back()->with('mensaje','nota actualizada');

    // }







    
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
