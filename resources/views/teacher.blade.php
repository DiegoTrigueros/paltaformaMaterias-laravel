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
                    @foreach ($gruposAsignados as $grupo)
                    <div class="card margin-top-ten padding-ten" style="width: 18rem;">
                        <h5 class="card-title font-weight-bold">
                            {{ $grupo->codigoGrupo }}
                        </h5>
                        <div class="card-body">
                            <p class="">
                                {{$grupo->materia->materia}}
                            </p>
                            <p>
                                {{__("LUNES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{__("MIÉRCOLES: 7:15 - 9:15am")}}
                            </p>
                            <p>
                                {{("DOCENTE: ".$user->nombresUsuario)}}
                            </p>
                            <p>
                                {{__("docenteejemplo@ejemplo.com")}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
