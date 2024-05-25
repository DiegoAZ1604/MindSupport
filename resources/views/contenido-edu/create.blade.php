@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Contenido Educativo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12 text-white">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Contenido Educativo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contenido-edu.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('contenido-edu.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
