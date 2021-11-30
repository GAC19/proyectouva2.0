@extends('layouts/administrador')
@section('title','home')
@section('content')

  <div class="container">
    <h1>PERSONAL</h1><br>
{{-- 
    <div class="container">
      <div class="float-right">
        <form class="form-inline">
          <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
    </div><br> --}}
   
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">perfil</th>
            {{-- <th scope="col">password</th> --}}
            <th scope="col">acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($us as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td style="display: none">{{$item->password}}</td>
                    <td>{{$item->perfil}}</td>
                    {{-- <td><a href="{{route('editar', $us)}}" class="btn btn-success btn-ms">Editar</a> <a href="#" class="btn btn-danger btn-ms">Eliminar</a></td> --}}
                    <td><a href="{{route('adm.editar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{route('adm.eliminar', $item)}}" method="POST" class="d-inline">
                      
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                  </td>
                </tr>
            @endforeach
      </table>
  </div>

  @endsection
 