@extends('layouts/administrador')
@section('title','Historial Total Compras')

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection



@section('content')
  <div style="margin-left: 2%">
    <h2>HISTORIAL</h2><br>

    <div>
      <form class="form-inline col-2">  
        <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-2" type="submit">Buscar</button>
        <button class="btn btn-outline-success my-2 my-sm-2" type="../adm/historialtotal">Refrescar</button>
      </form>
    </div>

    <table class="table" id="historial">
      <thead>
        <tr>
          <th scope="col">usuarios</th>
          <th scope="col">variedad</th>
          <th scope="col">tipo</th>
          <th scope="col">categoria</th>
          <th scope="col">embalaje</th>
          <th scope="col">fecha</th>
          <th scope="col">descripcion</th>
          <th scope="col">Rut Empresa</th>
          <th scope="col">Nombre Empresa</th>
          <th scope="col">Direccion</th>
          <th scope="col">Estado</th>
          {{-- <th scope="col">descripcion</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach ($segui as $item)
          <tr>
            <th scope="row">{{$item->usuarios}}</th>
            <td>{{$item->variedad}}</td>
            <td>{{$item->tipo}}</td>
            <td>{{$item->categoria}}</td>
            <td>{{$item->embalaje}}</td>
            <td>{{$item->updated_at}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->rut_empresa}}</td>
            <td>{{$item->nombre_empresa}}</td>
            <td>{{$item->direccion}}</td>
            <td class="text-primary"><strong>{{$item->estado}}</strong></td>
            <td><a href="{{route('adm.editarcompra', $item)}}" class="btn btn-warning btn-sm">CAMBIAR ESTADO</a>
            {{-- <form action="{{route('cliente.eliminar', $item)}}" method="POST" class="d-inline">
              @method('DELETE')
              @csrf
                <button class="btn btn-danger" type="submit">CANCELAR COMPRA</button>
            </form> --}}
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    </div>
@endsection

@section('js')
    {{-- <script>
      alert("Hello! I am an alert box!!");
    </script> --}}
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $('#historial').DataTable();
  </script>
@endsection




