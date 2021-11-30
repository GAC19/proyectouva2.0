@extends('layouts/plantilla')
@section('title','home')
@section('content')
    
  <div  class="container">
    <h1 style="text-align: left">Realizar Compras</h1>
    <h3>Usuario: {{ Auth::user()->name }}</h3><hr>
  </div>

  <?php
  ?>
  <form action="../comprasrealizada" method="POST">
    @csrf
    <div class="container">
      <div class="row">
          <input type="text" class="form-control" style="display: none" name="usuario" value="{{ Auth::user()->name }}">
        <h3>Seleccione el Producto</h3><br>
        {{-- COMIENZA DE ACA-----------------------------------------   --}}
        <div class="mb-3 col"> 
          <label for="exampleFormControlInput1" class="form-label">SELECCIONE VARIEDAD</label> 
          <select class="form-select mb-1" name="variedad" value="{{old('variedad')}}">
            <option selected>seleccione una opcion</option>
            <option value="Variedad Roja">Variedad Roja</option>
            <option value="Variedad Verde">Variedad Verde</option>
            <option value="Variedad Negra">variedad Negra</option>
          </select>
          {!! $errors->first('variedad') !!}
        </div>
        <div class="mb-3 col">
          <label for="exampleFormControlInput1" class="form-label">TIPO VARIEDAD</label> 
          <select class="form-select mb-1" name="tipo" value="{{old('tipo')}}">
            <br><option selected>seleccione una opcion</option>
            <option value="flame seedles">flame seedles</option>
            <option value="crimson seedless">crimson seedless</option>
            <option value="allison">allison</option>
            <option value="thompson_seedless">thompson_seedless</option>
            <option value="superior_seedless">superior_seedless</option>
            <option value="melody">melody</option>
            {!! $errors->first('tipo') !!}
          </select> 
        </div>
        <div class="mb-3 col">
          <label for="exampleFormControlInput1" class="form-label">CATEGORIA DE UVA</label>
          <select class="form-select" aria-label="Default select example" name="categoria" value="{{old('categoria')}}">
            <option selected>seleccione una opcion</option>
            <option value="A1 (ULTRA">A1 (ULTRA)</option>
            <option value="A2 (PREMIUN)">A2 (PREMIUN)</option>
            <option value="B1 (ESTANDAR)">B1 (ESTANDAR)</option>
            <option value="B2 (BASE)">B2 (BASE)</option>
            {!! $errors->first('categoria') !!}
          </select><br>
        </div>
        <div class="mb-3 col-4">
          <label for="exampleFormControlInput1" class="form-label col-4">TIPO DE EMBALAJE</label>
                <select class="form-select" aria-label="Default select example" name="embalaje" value="{{old('enbalaje')}}">
                    <option selected>seleccione una opcion</option>
                    <option value="AGRANEL">AGRANEL</option>
                    <option value="CLAMSHEL">CLAMSHEL</option>
                    <option value="BOLSA">BOLSA</option>
                    {!! $errors->first('embalaje') !!}
                </select>
        </div>
      </div><hr>  
      

      <h3>Antecedente Empresa</h3><br>
      <div class="row">        
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">Rut Empresa</label>
            <input type="text" class="form-control" name="rut_empresa" value="{{old('rut_empresa')}}">
            {!! $errors->first('rut_empresa') !!}
            <div id="emailHelp" class="form-text">indique razon social</div>
        </div>

        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">Nombre Empresa</label>
            <input type="text" class="form-control" name="nombre_empresa"  value="{{old('nombre_empresa')}}">
            {!! $errors->first('nombre_empresa') !!}
            <div id="emailHelp" class="form-text">nombre completo de la empresa</div>
        </div>
        <div class="mb-3 col">

             <label for="exampleInputEmail1" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion"  value="{{old('direccion')}}">
            {!! $errors->first('direccion') !!}
            <div id="emailHelp" class="form-text">Direccion</div>
        </div>
        <input type="text" class="form-control" style="display: none" name="estado" value="En proceso">
      </div><br>

      <div class="mb-6 col-5">
        <label for="exampleFormControlTextarea1" class="form-label">escriba una pequeña reseña</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="descripcion"value="{{old('descripcion')}}"></textarea>
        {!! $errors->first('descripcion') !!}
      </div><hr>

      <button type="submit" class="btn bg-success text-light">GUARDAR</button>
  </form>
@endsection