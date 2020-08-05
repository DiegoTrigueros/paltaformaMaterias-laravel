@extends('layouts.app')
@section('content')
    <div class="bg">
        <img src="/img/student-profile.png" alt="">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 align-items-center d-flex flex-column">
                @include('inc.profile-sidebar')
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <h3>{{__("GRUPOS Y MATERIAS ASIGNADAS")}}</h3>
                </div>
                <div class="card-deck">
                    <div class="card margin-top-ten padding-ten" style="width: 18rem;">
                        <h5 class="card-title font-weight-bold">
                            {{ __('MDB104 01T') }}
                        </h5>
                        <div class="card-body">
                            <p class="">
                                {{__("Modelamiento y Diseño de Bases de Datos")}}
                            </p>
                            <p>
                                {{__("LUNES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("MIÉRCOLES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("DOCENTE: Raúl Edgardo Nombre Ejemplo")}}
                            </p>
                            <p>
                                {{__("docenteejemplo@ejemplo.com")}}
                            </p>
                        </div>
                    </div>
                    <div class="card margin-top-ten padding-ten" style="width: 18rem;">
                        <h5 class="card-title font-weight-bold">
                            {{ __('MDB104 01T') }}
                        </h5>
                        <div class="card-body">
                            <p class="">
                                {{__("Modelamiento y Diseño de Bases de Datos")}}
                            </p>
                            <p>
                                {{__("LUNES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("MIÉRCOLES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("DOCENTE: Raúl Edgardo Nombre Ejemplo")}}
                            </p>
                            <p>
                                {{__("docenteejemplo@ejemplo.com")}}
                            </p>
                        </div>
                    </div>
                    <div class="card margin-top-ten padding-ten" style="width: 18rem;">
                        <h5 class="card-title font-weight-bold">
                            {{ __('MDB104 01T') }}
                        </h5>
                        <div class="card-body">
                            <p class="">
                                {{__("Modelamiento y Diseño de Bases de Datos")}}
                            </p>
                            <p>
                                {{__("LUNES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("MIÉRCOLES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("DOCENTE: Raúl Edgardo Nombre Ejemplo")}}
                            </p>
                            <p>
                                {{__("docenteejemplo@ejemplo.com")}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card margin-top-ten padding-ten" style="width: 18rem;">
                        <h5 class="card-title font-weight-bold">
                            {{ __('MDB104 01T') }}
                        </h5>
                        <div class="card-body">
                            <p class="">
                                {{__("Modelamiento y Diseño de Bases de Datos")}}
                            </p>
                            <p>
                                {{__("LUNES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("MIÉRCOLES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("DOCENTE: Raúl Edgardo Nombre Ejemplo")}}
                            </p>
                            <p>
                                {{__("docenteejemplo@ejemplo.com")}}
                            </p>
                        </div>
                    </div>
                    <div class="card margin-top-ten padding-ten" style="width: 18rem;">
                        <h5 class="card-title font-weight-bold">
                            {{ __('MDB104 01T') }}
                        </h5>
                        <div class="card-body">
                            <p class="">
                                {{__("Modelamiento y Diseño de Bases de Datos")}}
                            </p>
                            <p>
                                {{__("LUNES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("MIÉRCOLES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("DOCENTE: Raúl Edgardo Nombre Ejemplo")}}
                            </p>
                            <p>
                                {{__("docenteejemplo@ejemplo.com")}}
                            </p>
                        </div>
                    </div>
                    <div class="card margin-top-ten padding-ten" style="width: 18rem;">
                        <h5 class="card-title font-weight-bold">
                            {{ __('MDB104 01T') }}
                        </h5>
                        <div class="card-body">
                            <p class="">
                                {{__("Modelamiento y Diseño de Bases de Datos")}}
                            </p>
                            <p>
                                {{__("LUNES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("MIÉRCOLES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("DOCENTE: Raúl Edgardo Nombre Ejemplo")}}
                            </p>
                            <p>
                                {{__("docenteejemplo@ejemplo.com")}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
