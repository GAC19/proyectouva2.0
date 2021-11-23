<?php

namespace App\Http\Controllers;
use App;
use App\Models;
use App\Models\compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class clientecontroler extends Controller
{
/*     public function index(){
        return view('index');
    } */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user(){
        /* $usuario = App\Models\User::all(); */
        $user = DB::table('users')->get('name');
        if (Auth::user()->perfil == 'Usuario') {
            # code...
            /* dd('gustavo admin'); */
            
            return view('cliente/user', compact('user'));

        } else {
            # code...
            /* dd(Auth::user()->name); */
            return view('adm/home_adm');
            dd('gustavo no admin');

        }
        
        /* dd($user); */

        /* return view('cliente/user', compact('user')); */
    }

    public function producto(){

        return view('cliente/producto');
    }


    // COMPRAR
    public function comprasrealizada(Request $request){
       
        $validated = $request->validate(
            [
             'variedad'=>'required',
             'tipo'=>'required',
             'categoria'=>'required',
             'embalaje'=>'required',
             'descripcion'=>'required',
             'rut_empresa'=>'required',
             'nombre_empresa'=>'required',
             'direccion'=>'required',
            ]
            );
        $comp = new App\Models\compra;
        $comp->variedad=$request->variedad;
        $comp->tipo=$request->tipo;
        $comp->categoria=$request->categoria;
        $comp->embalaje=$request->embalaje;
        $comp->descripcion=$request->descripcion;
        $comp->rut_empresa=$request->rut_empresa;
        $comp->nombre_empresa=$request->nombre_empresa;
        $comp->direccion=$request->direccion;

        $comp->save();
        return back();
    }

    // VER
    public function historial(){

        $segui = App\Models\compra::all();
        return view('cliente/historial', compact('segui'));
    }

}
