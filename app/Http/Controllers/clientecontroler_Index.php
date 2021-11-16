<?php

namespace App\Http\Controllers;
use App;
use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class clientecontroler_Index extends Controller
{


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
        return view('index');
    }
    
    // public function create(){
    //     return view('create');
    // }
    
    // public function login2(){
    //     return view('login2');
    // }

}
