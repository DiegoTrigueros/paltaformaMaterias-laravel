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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <span class="condensed font-weight-bold ">{{ __('GRUPOS DE PROYECTO') }}</span>
                            </div>
                            <div class="col">
                                <select class="form-control" name="materia" id="">
                                    @foreach ($materias as $materia)
                                        <option value="{{$materia->codigoMateria}}">{{$materia->Materia}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <a href="">
                                        {{ __('Solicitar cambio') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table margin-top-ten">
                                <tr>
                                    <th>CARNÉ</th>
                                    <th>NOMBRE COMPLETO</th>
                                    <th>CORREO</th>
                                </tr>
                                <tr>
                                    <td>TF170273</td>
                                    <td class="text-uppercase">TF170243</td>
                                    <td>diegofytn@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>TF170273</td>
                                    <td class="text-uppercase">TF170243</td>
                                    <td>diegofytn@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>TF170273</td>
                                    <td class="text-uppercase">TF170243</td>
                                    <td>diegofytn@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>TF170273</td>
                                    <td class="text-uppercase">TF170243</td>
                                    <td>diegofytn@gmail.com</td>
                                </tr>   
                            </table>
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
