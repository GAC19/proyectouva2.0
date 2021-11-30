<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    // use HasFactory;
    protected $fillable = [
    'usuario'=>'usuario',
    'variedad'=>'required',
    'tipo'=>'required',
    'categoria'=>'required',
    'embalaje'=>'required',
    'rut_empresa'=>'required',
    'nombre_empresa'=>'required',
    'direccion'=>'required',
    'estado'=>'required',
    ];
}
