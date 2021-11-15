@extends('layouts/plantilla')
    @section('title','home')
    @section('content')
    
        <h1 style="text-align: center">consulta</h1>

        <div class="container">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Motivo</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>seleccione una opcion</option>
                <option value="1">consulta</option>
                <option value="2">reclamo</option>
                <option value="3">otro</option>
              </select>

          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">escriba una pequeña reseña</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div><input type="submit" class="btn btn-success"></div>
        </div>
    @endsection











