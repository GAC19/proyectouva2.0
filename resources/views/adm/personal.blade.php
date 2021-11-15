@extends('layouts/administrador')
@section('title','home')
@section('content')
  
  <div class="container">
    <h1>PERSONAL</h1><br>

    <form action="../agregarpersonal" method="POST">
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
          <input type="text" class="form-control" name="password" value="{{old('password')}}">
          {!! $errors->first('password') !!}
      </div></div>
      <button type="submit" class="btn bg-success text-light">GUARDAR</button><br><hr>
    </form><br>



    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuario as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    {{-- <td><a href="{{route('ancla', $item)}}"></a> {{$item->name}}</td> --}}
                    <td>{{$item->email}}</td>
                    <td>{{$item->password}}</td>
                    <td><a href="{{route('editarpersonal')}}" class="btn btn-success btn-ms">Editar</a> <a href="#" class="btn btn-danger btn-ms">Eliminar</a></td>
                </tr>
            @endforeach
          

      </table>
  </div>
@endsection