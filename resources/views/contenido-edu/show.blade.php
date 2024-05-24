@extends('layouts.app')

@section('template_title')
    {{ $contenidoEdu->name ?? __('Show') . " " . __('Contenido Edu') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Contenido Edu</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('contenido-edu.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Idcontenido:</strong>
                                    {{ $contenidoEdu->IdContenido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $contenidoEdu->user_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Titulo:</strong>
                                    {{ $contenidoEdu->Titulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $contenidoEdu->Descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipocontenido:</strong>
                                    {{ $contenidoEdu->TipoContenido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Contenido:</strong>
                                    {{ $contenidoEdu->Contenido }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
