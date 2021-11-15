@extends('layouts/login')
    @section('title','home')
    @section('content')
    
        
        <div class="container">
            <h1 style="text-align: Left" class="text-success">Recuperar</h1><hr><br>
            <div class="d-flex justify-content-center">
                <div class="card w-50">
                    <div class="card-header bg-light">
                        <div class="card-header">{{ __('Restablecer Contraseña') }}</div>
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico:') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><br>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Enviar enlace') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <img src="../static/imagen/logo.png" alt="logo" width="400" height="100" class="mx-auto d-block"></div>
        </div>
    @endsection
