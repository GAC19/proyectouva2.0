@extends('layouts/administrador')
@section('title','home')
@section('content')
    

  <div class="container">
    <h1 style="text-align: center">USUARIOS REGISTRADO</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">Nombre</th>
            <th scope="col">correo electronico</th>
            <th scope="col">creacion de la cta.</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($dato as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td><a href="{{route('editarpersonal', $item)}}" class="btn btn-success btn-ms">Editar</a> <a href="#" class="btn btn-danger btn-ms">Eliminar</a></td>
                </tr>
            @endforeach
          

      </table><br><hr>

      <label for="customRange3" class="form-label">Example range</label>
    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">    
  </div>
@endsection