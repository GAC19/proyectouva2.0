<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos extends Model
{
    /* use HasFactory; */
    protected $fillable = [
        'rut_empresa'=>'required',
        'nombre_empresa'=>'required',
        'telefono_empresa'=>'required',
        'ciudad'=>'required',
        'nombre'=>'required',
        'rut'=>'required',
        'email'=>'required',
        'password'=>'required',
    ];

}
