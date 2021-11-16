@extends('layouts/plantilla')
@section('title','home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h3>Antecedentes:</h3>
            <label><strong>Usuario: {{ Auth::user()->name }}</strong></label><br>
            <label><strong>Correo electronico: {{ Auth::user()->email }} </strong></label><hr>
        </div>

        </div>
                <br><h1 style="text-align: center">Bienvenido</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quam numquam, culpa voluptatibus ipsam eaque quaerat quo, reiciendis soluta asperiores doloribus. Nulla minus, nisi vel non rem perspiciatis ullam voluptate.</p>
        </div>

</div> 
@endsection




{{-- @foreach ($segui as $item)
<tr>ñ
    <th scope="row">{{$item->id}}</th>
    <td>{{$item->variedad}}</td>
    <td>{{$item->tipo}}</td>
    <td>{{$item->categoria}}</td>
    <td>{{$item->embalaje}}</td>
    <td>{{$item->descripcion}}</td>
    <td>{{$item->updated_at}}</td>
</tr>
@endforeach --}}