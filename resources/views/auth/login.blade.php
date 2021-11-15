@extends('layouts.login')
@section('content')

        <div class="container" >
            <div class="row">
                <div class="col"><h1 class="text-success">Crear Cuenta</h1></div>
                <div class="col col-lg-1"><a href="adm/home_adm">Administrador</a></div>
            </div>
            <hr>
            <div class="d-flex justify-content-center">
                <div class="card w-50">
                    <div class="card-header bg-light">
                        <div class="cd-flex justify-content-end text-green">{{ __('Usuario') }}</div>
        
                        <div class="card-body w-300">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo ELectronico') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div><br>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-1 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordar') }}
                                            </label>
                                        </div>
                                    </div>
                                </div><br>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            {{ __('Ingresar') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Olvidaste tu contraseña?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
        <div class="container"><button onclick="document.location='./'" class="btn bg-success text-light">volver</button></div><br>
        <div class="container">
            <img src="./static/imagen/logo.png" alt="logo" width="400" height="100" class="mx-auto d-block"></div>
        





@endsection

{{-- 

@extends('layouts/login')
    @section('title','home')
    @section('content')
    
        
    
    @endsection --}}
