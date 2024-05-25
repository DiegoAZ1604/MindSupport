@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Servicio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12 text-white">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Servicio</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('servicio.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('servicio.form', ['servicio' => $servicio, 'users' => $users, 'contenidoEdu' => $contenidoEdu, 'consulta' => $consulta])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
