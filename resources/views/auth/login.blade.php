@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="row carduno">
            <div class="col-md-4 carduno">
                <div class="card carduno">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf 
                    <img src="assets/img/fondo1.jpg" class="card-img-top card" alt="...">

                    <div class="card-body">
                        <h2 class="card-title"> <strong class="color">INICIO DE</strong> <strong class="coloruno">SESIÓN</strong></h2>
                        <p class="card-text"> <strong class="color">Bienvenidos</strong></p>
                        
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-6 col-form-label"><strong class="color">Email</strong></label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="inputPassword">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-6 col-form-label"><strong class="color">Password</strong></label>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>

                        <a href="{{ url('propietario') }}"><button type="button" class="btn btn-outline-secondary boton"><strong class="color">Entrar</strong></button></a>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Java Bootstrap--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--Java Bootstrap-->
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf 

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
