@extends('layouts.app')
@section('content')
<div class="bg">
    <img src="/img/group-creation-bg.png" alt="">
</div>
<div class="container-fluid">
    <div class="card-deck">
        <div class="card margin-top-ten padding-ten" style="max-width: 18rem;">
            <h5 class="card-title font-weight-bold">
                {{ __('01TMDB104') }}
            </h5>
            <div class="card-body">
                <p class="">
                    {{ __('Modelamiento y Diseño de Bases de Datos') }}
                </p>
                <p>
                    {{ __('LUNES: 7:15 - 9:15am') }}
                </p>
                <p>
                    {{ __('MIÉRCOLES: 7:15 - 9:15am') }}
                </p>
            </div>
        </div>
    </div>
    <div class="row margin-top-ten">
        <div class="col-md-12">
            <div class="card card-groups">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection