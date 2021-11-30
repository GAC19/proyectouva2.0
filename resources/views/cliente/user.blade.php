@extends('layouts/plantilla')
@section('title','home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h2>Antecedentes:</h2>
            <h3>Usuario: {{ Auth::user()->name }}</h3>
            <h3>Correo electronico: {{ Auth::user()->email }}</h3><hr>
        </div>

        </div>
                <br><h1 style="text-align: center">Bienvenido</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quam numquam, culpa voluptatibus ipsam eaque quaerat quo, reiciendis soluta asperiores doloribus. Nulla minus, nisi vel non rem perspiciatis ullam voluptate.</p>
        </div>


</div> 
@endsection
