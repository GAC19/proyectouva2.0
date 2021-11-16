@extends('layouts/plantilla')
@section('title','home')
@section('content')
    
  <h1 style="text-align: left" class="container">PRODUCTO</h1><br><hr>

  <form action="#" method="POST">
    @csrf
    <div class="container">
      <div class="mb-2 col-4">
          <h5 class="font-weight-light">TIPO VARIEDAD</h5>
              <select class="form-select mb-1" name="1.-">
                  <option selected>seleccione una opcion</option>
                  <option value="1">Variedad Roja</option>
                  <option value="2">Variedad Verde</option>
                  <option value="3">variedad Negra</option>
              </select>
              <select class="form-select">
                  <option selected>seleccione una opcion</option>
                  <option value="1">#</option>
                  <option value="2">#</option>
                  <option value="3">#</option>
              </select>
        </div>
        <div class="mb-3 col-2">
        <label for="exampleFormControlInput1" class="form-label">CATEGORIA DE UVA</label>
              <select class="form-select" aria-label="Default select example">
                  <option selected>seleccione una opcion</option>
                  <option value="1">A1 (ULTRA)</option>
                  <option value="2">A2 (PREMIUN)</option>
                  <option value="3">B1 (ESTANDAR)</option>
                  <option value="3">B2 (BASE)</option>
              </select><br>
        </div>
        <hr>
        <label for="exampleFormControlInput1" class="form-label">TIPO DE PALLET</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1"> CAJA 96 </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
          <label class="form-check-label" for="flexRadioDefault2"> CAJA 108</label>
        </div>
        <hr>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label col-4">TIPO DE EMBALAJE</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>seleccione una opcion</option>
                    <option value="1">AGRANEL</option>
                    <option value="2">CLAMSHEL</option>
                    <option value="3">BOLSA</option>
                </select><br>
          </div>

        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">escriba una pequeña reseña</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div><input type="submit" class="btn btn-success"></div>
      </div>


  </form>
  


        

    @endsection