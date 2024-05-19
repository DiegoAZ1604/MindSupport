@extends('layouts.app')

@section('template_title')
    {{ $calificacion->name ?? __('Show') . " " . __('Calificacion') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Calificacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('calificacions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Idcalificacion:</strong>
                                    {{ $calificacion->IdCalificacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idservicio:</strong>
                                    {{ $calificacion->IdServicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Puntuacion:</strong>
                                    {{ $calificacion->Puntuacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Comentario:</strong>
                                    {{ $calificacion->Comentario }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
