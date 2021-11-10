@extends('layouts/plantilla')
@section('title','home')
@section('content')

    <h1 style="text-align: center">USER</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quam numquam, culpa voluptatibus ipsam eaque quaerat quo, reiciendis soluta asperiores doloribus. Nulla minus, nisi vel non rem perspiciatis ullam voluptate.</p>

          @foreach ($usuario as $item)
              
                  <th scope="row"> <p>{{$item->id}}</p></th>
                  
                  <th><p>{{$item->name}}</p></th>
                  <th><p>{{$item->email}}</p></th>
                  <th><p>{{$item->password}}</p></th>
                 
              
          @endforeach




@endsection>