@extends('layouts/administrador')
@section('title','home')
@section('content')
    

  <div class="container">
    <h1 style="text-align: center">USUARIOS REGISTRADO</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">rut_empresa</th>
            <th scope="col">nombre_empresa</th>
            <th scope="col">telefono_empresa</th>
            <th scope="col">ciudad</th>
            <th scope="col">nombre</th>
            <th scope="col">rut</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($dato as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->rut_empresa}}</td>
                    <td>{{$item->nombre_empresa}}</td>
                    <td>{{$item->telefono_empresa}}</td>
                    <td>{{$item->ciudad}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->rut}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}}</td>
                    <td><a href="{{route('editarpersonal', $item)}}" class="btn btn-success btn-ms">Editar</a> <a href="#" class="btn btn-danger btn-ms">Eliminar</a></td>
                </tr>
            @endforeach
          

      </table><br><hr>

      <label for="customRange3" class="form-label">Example range</label>
    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">    
  </div>
@endsection