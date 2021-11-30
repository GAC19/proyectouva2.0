@extends('layouts/plantilla')
@section('title','home')
@section('content')

<div style="margin-left: 5%">
  <h2>HISTORIAL</h2><br>
  <h3>Usuario: {{ Auth::user()->name }}</h3>


  <table class="table">
      <thead>
        <tr>
          {{-- <th scope="col">#id</th> --}}
          <th scope="col">variedad</th>
          <th scope="col">tipo</th>
          <th scope="col">categoria</th>
          <th scope="col">embalaje</th>
          {{-- <th scope="col">fecha</th> --}}
          <th scope="col">descripcion</th>
          {{-- <th scope="col">Rut Empresa</th> --}}
          {{-- <th scope="col">Nombre Empresa</th> --}}
          <th scope="col">Direccion</th>
          <th scope="col">Estado</th>
          {{-- <th scope="col">descripcion</th> --}}
        </tr>
      </thead>
      
      <tbody>
        @foreach ($segui as $item)
          <tr>
            {{-- <th scope="row">{{$item->id}}</th> --}}
            <td>{{$item->variedad}}</td>
            <td>{{$item->tipo}}</td>
            <td>{{$item->categoria}}</td>
            <td>{{$item->embalaje}}</td>
            {{-- <td>{{$item->updated_at}}</td> --}}
            <td>{{$item->descripcion}}</td>
            {{-- <td>{{$item->rut_empresa}}</td> --}}
            {{-- <td>{{$item->nombre_empresa}}</td> --}}
            <td>{{$item->direccion}}</td>
            <td class="text-primary"><strong>{{$item->estado}}</strong> </td>
            <td><a href="{{route('cliente.editar', $item)}}" class="btn btn-warning btn-sm">CAMBIAR DOMICILIO</a>
              <form action="{{route('cliente.eliminar', $item)}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">CANCELAR COMPRA</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>


@endsection