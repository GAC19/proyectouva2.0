@extends('layouts/administrador')
@section('title','home')
@section('content')

  <div class="container">
    <h1>PERSONAL</h1><br>
   
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
                    <form action="{{route('adm.eliminar', $item)}}" method="POST" class="d-inline" id="btn1">
                      
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>
                    
                  </td>
            @endforeach
      </table>
  </div>

@endsection
<script> function EventoAlert(){
  Swal.fire('Any fool can use a computer')
}
</script>
{{-- @section('js') --}}


{{-- <script src="{{ asset('static/js/sweetalert29.js') }}"></script> --}}
  
    
  
{{-- @endsection --}}
 