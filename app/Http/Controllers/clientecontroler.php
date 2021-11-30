<?php

namespace App\Http\Controllers;
use App;
use App\Models;
use App\Models\compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class clientecontroler extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user(){
        $user = DB::table('users')->get('name');
        if (Auth::user()->perfil == 'Usuario') {
            
            return view('cliente/user', compact('user'));
        } 
        else {
            return view('adm/home_adm');

        }
    }

    public function producto(){
        return view('cliente/producto');
    }


    // COMPRAR
    public function comprasrealizada(Request $request){
       
        $validated = $request->validate(
            [
             'usuario'=>'required',
             'variedad'=>'required',
             'tipo'=>'required',
             'categoria'=>'required',
             'embalaje'=>'required',
             'descripcion'=>'required',
             'rut_empresa'=>'required',
             'nombre_empresa'=>'required',
             'direccion'=>'required',
             'estado'=>'required',
            ]
            );
        $comp = new App\Models\compra;
        $comp->usuario=$request->usuario;
        $comp->variedad=$request->variedad;
        $comp->tipo=$request->tipo;
        $comp->categoria=$request->categoria;
        $comp->embalaje=$request->embalaje;
        $comp->descripcion=$request->descripcion;
        $comp->rut_empresa=$request->rut_empresa;
        $comp->nombre_empresa=$request->nombre_empresa;
        $comp->direccion=$request->direccion;
        $comp->estado=$request->estado;
        
        $comp->save();
        return back();
    }
    
       
    public function editar($id){
        $prod=App\Models\compra::findOrFail($id);
        return view('cliente.editar', compact('prod'));
    }
    
    public function update(Request $request, $id){

        $notaupdate=App\Models\compra::findOrFail($id);

        $notaupdate->variedad= $request->variedad;
        $notaupdate->tipo= $request->tipo;
        $notaupdate->categoria= $request->categoria;
        $notaupdate->embalaje= $request->embalaje;
        $notaupdate->descripcion= $request->descripcion;
        $notaupdate->rut_empresa= $request->rut_empresa;
        $notaupdate->nombre_empresa= $request->nombre_empresa;
        $notaupdate->direccion=  $request->direccion;

        $notaupdate->save();
        
        return redirect('cliente/historial');

    }

    public function eliminar($id){

        $notaEliminar = App\Models\compra::findOrFail($id);
        $notaEliminar->delete();
    
        return back()->with('mensaje', 'Nota Eliminada');
    }

    public function historial(Request $request){
        $nombre=Auth::user()->name;
        $segui = compra::where('usuario','like',"$nombre")->paginate(10);       
        return view('cliente/historial', compact('segui'));
        
        // $us = App\Models\User::all();
        // $us = User::paginate(1); //cantidad de columna a mostrar
    }

}
