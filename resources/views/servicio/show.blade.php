@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? __('Show') . " " . __('Servicio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Idservicio:</strong>
                                    {{ $servicio->IdServicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $servicio->user_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idcontenido:</strong>
                                    {{ $servicio->IdContenido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idconsulta:</strong>
                                    {{ $servicio->IdConsulta }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Costo:</strong>
                                    {{ $servicio->Costo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
