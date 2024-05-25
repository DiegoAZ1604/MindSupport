@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Consulta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12 text-white">

                <div class="card card-default">
                    <div class="card-header text-white">
                        <span class="card-title">{{ __('Create') }} Consulta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('consulta.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('consulta.form', ['consulta' => $consulta, 'users' => $users])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
