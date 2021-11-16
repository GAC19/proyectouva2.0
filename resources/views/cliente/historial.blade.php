@extends('layouts/plantilla')
@section('title','home')
@section('content')

  <div class="container">
    <h2>HISTORIAL</h2>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#id</th>
            <th scope="col">variedad</th>
            <th scope="col">tipo</th>
            <th scope="col">categoria</th>
            <th scope="col">embalaje</th>
            <th scope="col">fecha</th>
            <th scope="col">descripcion</th>
            {{-- <th scope="col">descripcion</th> --}}
          </tr>
        </thead>
        <tbody>
            @foreach ($segui as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->variedad}}</td>
                    <td>{{$item->tipo}}</td>
                    <td>{{$item->categoria}}</td>
                    <td>{{$item->embalaje}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>{{$item->descripcion}}</td>
                </tr>
            @endforeach
      </table>
  </div>
@endsection