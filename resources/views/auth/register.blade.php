@extends('layouts.app')
@section('content')
    <div class="bg">
        <img src="/img/register-bg.png" alt="">
    </div>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-4 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-12 mx-auto">

                                <form action="{{ route('register') }}" method="post" class="justify-content-center" enctype="multipart/form-data">
                                    <h3 style="text-align: center">REGÍSTRATE</h3>
                                    @if ($errors->any())
                                        <div class="row collapse">
                                            <ul class="alert-box warning radius">
                                                @foreach ($errors->all() as $error)
                                                    <li> {{ $error }} </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-label-group">
                                                <label for="carne"
                                                    class="condensed font-weight-bold">{{ __('Número de carné') }}</label>
                                                <div class="col-md-16">
                                                    <input type="text" id="codigoUsuario"
                                                        class="form-control @error('codigoUsuario') is-invalid @enderror"
                                                        name="codigoUsuario" value="{{ old('codigoUsuario') }}"
                                                        placeholder="TF567948" required autofocus>
                                                    @error('codigoUsuario')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-label-group">
                                                <label for="password"
                                                    class="condensed font-weight-bold">{{ __('Contraseña') }}</label>
                                                <div class="col-md-16">
                                                    <input type="password" id="studentPass"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" value="{{ old('password') }}"
                                                        placeholder="Contraseña" required autofocus>
                                                </div>
                                            </div>
                                            <div class="form-label-group">
                                                <label for="inputNames"
                                                    class="condensed font-weight-bold">{{ __('Nombres') }}</label>
                                                <div class="col-md-16">
                                                    <input type="text" id="studentNames"
                                                        class="form-control @error('nombresUsuario') is-invalid @enderror"
                                                        name="nombresUsuario" value="{{ old('nombresUsuario') }}"
                                                        placeholder="Nombres" required autofocus>
                                                    @error('nombresUsuario')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-label-group">
                                                <label for="apellidosUsuario"
                                                    class="condensed font-weight-bold">{{ __('Apellidos') }}</label>
                                                <div class="col-md-16">
                                                    <input type="text" id="studentLN"
                                                        class="form-control @error('apellidosUsuario') is-invalid @enderror"
                                                        name="apellidosUsuario" value="{{ old('apellidosUsuario') }}"
                                                        placeholder="Apellidos" required autofocus>
                                                    @error('apellidosUsuario')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-label-group">
                                                <label for="inputAge"
                                                    class="condensed font-weight-bold">{{ __('Edad') }}</label>
                                                <div class="col-md-16">
                                                    <input type="number" id="edadUsuario"
                                                        class="form-control @error('edadUsuario') is-invalid @enderror"
                                                        name="edadUsuario" value="{{ old('edadUsuario') }}" required autofocus
                                                        min="0">
                                                    @error('edadUsuario')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-label-group">
                                                <label for="telefonoUsuario"
                                                    class="condensed font-weight-bold">{{ __('Número de teléfono') }}</label>
                                                <div class="col-md-16">
                                                    <input type="text" id="studentPhone"
                                                        class="form-control @error('telefonoUsuario') is-invalid @enderror"
                                                        name="telefonoUsuario" value="{{ old('telefonoUsuario') }}"
                                                        placeholder="7569-9852" required autofocus max="9">
                                                    @error('telefonoUsuario')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-label-group">
                                                <label for="inputImage"
                                                    class="condensed font-weight-bold">{{ __('Foto de perfil') }}</label>
                                                <div class="col-md-16">
                                                    <input type="file" name="imagenPerfil" id="imagenPerfil"
                                                        class="form-control-file">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col">
                                            <button
                                                class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold text-light"
                                                type="submit" id="register">{{ __('Registrar') }}</button>
                                        </div>
                                        <div class="col"></div>
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
