@extends('layouts/plantilla')
@section('title','home')
@section('content')
    
  <h1 style="text-align: left" class="container">PRODUCTO</h1><br><hr>


  <form action="../comprasrealizada" method="POST">
    @csrf
    <div class="container">
      <div class="row">
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
            <option value="1">#</option>
            <option value="2">#</option>
            <option value="3">#</option>
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
                </select><br>
        </div>
      </div>
      <div class="mb-3 col-6">
        <label for="exampleFormControlTextarea1" class="form-label">escriba una pequeña reseña</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"value="{{old('descripcion')}}"></textarea>
        {!! $errors->first('descripcion') !!}
      </div><hr>

      <h4>Antecedente Empresa</h4><br>
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
      </div><br>
      <button type="submit" class="btn bg-success text-light">GUARDAR</button>
  </form>
@endsection