@extends('layouts.app')

@section('content')
<div class="bg">
    <img src="/img/landing-bg.png" alt="">
</div>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-4 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-label-group">
                                        <label for="codigoUsuario"
                                            class="condensed font-weight-bold">{{ __('Número de carné') }}</label>
                                        <div class="col-md-16">
                                            <input type="text" id="studentCode"
                                                class="form-control @error('codigoUsuario') is-invalid @enderror"
                                                name="codigoUsuario" value="{{ old('codigoUsuario') }}" placeholder="Carné"
                                                required autofocus>
                                            @error('codigoUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="form-label-group">
                                        <label for="inputPassword"
                                            class="condensed font-weight-bold">{{ __('Contraseña') }}</label>
                                        <div class="col-md-16">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                placeholder="Contraseña" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button
                                        class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 text-light"
                                        type="submit">{{ __('Ingresar') }}</button>
                                    <div class="row">
                                        <div class="col">
                                            <div class="text-center">
                                                <span>¿No tienes cuenta? <a
                                                        href="{{ route('register') }}">¡Regístrate!</a></span></div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center">
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">
                                                        {{ __('¿Olvidaste tu contraseña?') }}
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
            <div class="d-none d-md-flex col-md-8 col-lg-6">

            </div>
        </div>
    </div>
@endsection
