<?php

namespace App\Http\Controllers;
use App;
use App\Models;
use Illuminate\Http\Request;

class clientecontroler extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function create(){
        return view('create');
    }
    
    public function login2(){
        return view('login2');
    }

    public function user(){
        $usuario = App\Models\usuarios::all();

        return view('cliente/user', compact('usuario'));
    }

    public function producto(){

        return view('cliente/producto');
    }

    public function historial(){

        $segui = App\Models\seguimiento::all();
        return view('cliente/historial', compact('segui'));
    }

    public function consulta(){
     
        return view('cliente/consulta');
    }

    public function informacion(){
     
        return view('cliente/informacion');
    }
}
