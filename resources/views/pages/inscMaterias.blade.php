@extends('layouts.app')
@section('content')
    <div class="bg">
        <img src="/img/sbj-register.png" alt="">
    </div>
    <div class="containter-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <span class="condensed font-weight-bold card-title">{{ __('INSCRIPCIÓN DE MATERIAS') }}</span>
                        @foreach ($materias as $materia)
                            <form action="{{ route('createInsc') }}" method="POST">
                                @csrf
                                <div class="row subjects">
                                    <div class="col-md-3 d-flex align-items-center">
                                        <span class="condensed">{{ $materia->materia }}</span>
                                        <input type="hidden" name="materia" value="{{ $materia->materia }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="gTeórico">{{ __('Grupo teórico') }}</label>
                                        <select class="form-control" id="" name="gTeorico">
                                            <option value="">---- Selecciona un grupo teórico ----</option>
                                            @foreach ($gruposT as $grupo)
                                                @if ($grupo->codigoMateria == $materia->codigoMateria)
                                                    <option value="{{ $grupo->codigoGrupo }}">{{ $grupo->codigoGrupo }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="gLab">{{ __('Grupo de laboratorio') }}</label>
                                        <select class="form-control" id="" name="gLab">
                                            <option value="">---- Selecciona un grupo de laboratorio ----</option>
                                            @foreach ($gruposL as $grupo)
                                                @if ($grupo->codigoMateria == $materia->codigoMateria)
                                                    <option value="{{ $grupo->codigoGrupo }}">{{ $grupo->codigoGrupo }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                            <div class="btn-group mr-2" aria-label="First group">
                                                <button
                                                    class="btn btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 text-light">
                                                    {{ __('Inscribir') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if (session()->has('success'))
                                    @if ($materia->codigoMateria == session()->get('codigoM'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                @endif
                                @if (session()->has('error'))
                                    @if ($materia->codigoMateria == session()->get('codigoM'))

                                        <div class="alert alert-danger">
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                                @endif
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    </div>
@endsection
