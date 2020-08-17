@extends('layouts.app')
@section('content')
    <div class="bg">
        <img src="/img/card-bg.png" alt="">
    </div>
    <div class="container-fluid">
        <div class="card-deck">
            @foreach ($grupos as $grupo)
                <div class="card margin-top-ten padding-ten" style="max-width: 18rem;">
                    <h5 class="card-title font-weight-bold">
                        {{ $grupo->codigoGrupo }}
                    </h5>
                    <div class="card-body">
                        <p class="text-uppercase">
                            {{ $grupo->materia->materia }}
                        </p>
                        <p>
                            {{ __('LUNES: 7:15 - 9:15am') }}
                        </p>
                        <p>
                            {{ __('MIÉRCOLES: 7:15 - 9:15am') }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row margin-top-ten">
            <div class="col-md-8">
                <div class="card card-groups">
                    <div class="card-body">
                        <div class="row">
                            <div class="col d-flex align-items-center">
                                <span class="condensed font-weight-bold ">{{ __('MATERIAS') }}</span>
                            </div>
                            <div class="col">
                                <select class="form-control" name="materia" id="materia" onchange="changeGroups()">
                                    @foreach ($grupos as $grupo)
                                    <option value="{{$grupo->materia->codigoMateria}}">{{$grupo->materia->materia}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-control" name="grupo" id="grupo">
                                    <option value="">-- Selecciona un grupo --</option>
                                </select>
                            </div>
                        </div>
                        <div class="row d-flex flex-column">
                            <div class="row d-flex align-items-center">
                                <div class="col-md-9">
                                    <span class="condensed font-weight-bold"
                                        style="padding-left: 15px">{{ __('Grupo 1') }}</span>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-danger">Eliminar grupo</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <table class="table margin-top-ten">
                                        <tr>
                                            <th>{{ __('CARNÉ') }}</th>
                                            <th>{{ __('NOMBRE COMPLETO') }}</th>
                                            <th>{{ __('CORREO') }}</th>
                                            <th>{{ __('ACCIONES') }}</th>
                                        </tr>
                                        <tr>
                                            <td>TF170273</td>
                                            <td class="text-uppercase">TF170243</td>
                                            <td>diegofytn@gmail.com</td>
                                            <td>
                                                <div class="btn-group project-groups">
                                                    <button class="btn btn-secondary">EDITAR</button>
                                                    <button class="btn btn-danger">REMOVER</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TF170273</td>
                                            <td class="text-uppercase">TF170243</td>
                                            <td>diegofytn@gmail.com</td>
                                            <td>
                                                <div class="btn-group project-groups">
                                                    <button class="btn btn-secondary">EDITAR</button>
                                                    <button class="btn btn-danger">REMOVER</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TF170273</td>
                                            <td class="text-uppercase">TF170243</td>
                                            <td>diegofytn@gmail.com</td>
                                            <td>
                                                <div class="btn-group project-groups">
                                                    <button class="btn btn-secondary">EDITAR</button>
                                                    <button class="btn btn-danger">REMOVER</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>TF170273</td>
                                            <td class="text-uppercase">TF170243</td>
                                            <td>diegofytn@gmail.com</td>
                                            <td>
                                                <div class="btn-group project-groups">
                                                    <button class="btn btn-secondary">EDITAR</button>
                                                    <button class="btn btn-danger">REMOVER</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script type="text/javascript">
        function changeGroups(){
            $.ajax({
                url: 'getGroups/{codigoMateria}',
                type: 'GET',
                data: {codigoMateria: $('#materia').val()},
                success: function(response){
                    var len = response.grupos.length;
                    var grupos = response.grupos;
                    $('#grupo').empty();
                    var option = '<option value="">-- Selecciona un grupo --</option>';
                    $('#grupo').append(option);
                    for (let i = 0; i < len; i++) {
                        option = '<option value="'+grupos[i].codigoGrupo+'">'+grupos[i].codigoGrupo+'</option>';
                        $('#grupo').append(option);
                    }
                }
            });
        }

        function dispGroups()() {
            $.ajax({
                url: 'getStudents/{codigoGrupo}',
                type: 'GET',
                data: {codigoGrupo: $('#grupo').val()},
                success: function(data){
                    console.log('Hola');
                }
            });
        }
    </script>
@endsection
