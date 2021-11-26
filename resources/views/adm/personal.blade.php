@extends('layouts/administrador')
@section('title','home')
@section('content')
  
  <div class="container">
    <h1>PERSONAL</h1><br>

    <form action="{{route('agregarpersonal')}}" method="POST">
      @csrf
      <div class="row justify-content-start">  
        <div class="mb-3 col">
          <label for="exampleInputEmail1" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}">
          {!! $errors->first('name') !!}
      </div>
      <div class="mb-3 col">
          <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
          <input type="text" class="form-control" name="email" value="{{old('email')}}">
          {!! $errors->first('email') !!}
      </div>
      <div class="mb-3 col">
          <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" value="{{old('password')}}">
          {!! $errors->first('password') !!}
      </div>

      <div class="mb-3 col">
        <label for="exampleFormControlInput1" class="form-label">Perfil</label> 
            <select class="form-select mb-1" name="perfil" value="{{old('variedad')}}">
              <option selected>seleccione una opcion</option>
              <option value="usuario">Usuario</option>
              <option value="adm">Administrador</option>
          </select>
          {!! $errors->first('variedad') !!}
      </div>
      </div>
      <button type="submit" class="btn bg-success text-light">GUARDAR</button><br><hr>
    </form><br>



    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">perfil</th>
            <th scope="col">password</th>
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
 