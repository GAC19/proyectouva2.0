@extends('layouts/administrador')
    @section('title','home')
    @section('content')
    
        <h1 style="text-align: center">PERSONAL</h1>
    
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
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->password}}</td>
                        <td><a href="#" class="btn btn-success btn-ms">Editar</a> <a href="#" class="btn btn-danger btn-ms">Eliminar</a></td>
                    </tr>
                @endforeach
              

          </table>


    @endsection>