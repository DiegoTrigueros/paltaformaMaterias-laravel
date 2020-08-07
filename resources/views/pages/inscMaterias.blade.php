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
                        <form action="" method="POST">
                            <div class="row subjects">
                                <div class="col-md-3 d-flex align-items-center">
                                    <span class="condensed">Modelamiento y Diseño de Bases de Datos</span>
                                </div>
                                <div class="col-md-3">
                                    <label for="gTeórico">{{ __('Grupo teórico') }}</label>
                                    <select class="form-control" id="" name="gTeorico">
                                        <option value="">---- Selecciona un grupo teórico ----</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="gLab">{{ __('Grupo de laboratorio') }}</label>
                                    <select class="form-control" id="" name="gLab">
                                        <option value="">---- Selecciona un grupo de laboratorio ----</option>
                                    </select>
                                </div>
                                <div class="col-md-3 d-flex align-items-center justify-content-center">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-2" aria-label="First group">
                                            <button class="btn btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 text-light">
                                                {{ __('Inscribir') }}</button>
                                        </div>
                                        <div class="btn-group" aria-label="Second group">
                                            <button class="btn btn-secondary btn-block btn-login text-uppercase font-weight-bold mb-2 text-light">{{ __('Cancelar') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row subjects">
                                <div class="col-md-3 d-flex align-items-center">
                                    <span class="condensed">Modelamiento y Diseño de Bases de Datos</span>
                                </div>
                                <div class="col-md-3">
                                    <label for="gTeórico">{{ __('Grupo teórico') }}</label>
                                    <select class="form-control" id="" name="gTeorico">
                                        <option value="">---- Selecciona un grupo teórico ----</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="gLab">{{ __('Grupo de laboratorio') }}</label>
                                    <select class="form-control" id="" name="gLab">
                                        <option value="">---- Selecciona un grupo de laboratorio ----</option>
                                    </select>
                                </div>
                                <div class="col-md-3 d-flex align-items-center justify-content-center">
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mr-2" aria-label="First group">
                                            <button class="btn btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 text-light">
                                                {{ __('Inscribir') }}</button>
                                        </div>
                                        <div class="btn-group" aria-label="Second group">
                                            <button class="btn btn-secondary btn-block btn-login text-uppercase font-weight-bold mb-2 text-light">{{ __('Cancelar') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    </div>
@endsection
