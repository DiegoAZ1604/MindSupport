@extends('layouts.app')

@section('template_title')
    Servicio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-white">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Servicio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('servicio.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-black text-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
									<th >Nombre De Usuario</th>
									<th >Titulo de Contenido</th>
									<th >Descripción de Consulta</th>
									<th >Costo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($servicio as $servicio)
                                        <tr>
                                            
                                            <td>{{ $servicio->user->name }}</td>
                                            <td>{{ $servicio->contenidoEdu ? $servicio->contenidoEdu->Titulo : '' }}</td>
                                            <td>{{ $servicio->consulta ? $servicio->consulta->Descripcion : '' }}</td>
                                            <td>{{ $servicio->Costo }}</td>
                                           

                                            <td>
                                                <form action="{{ route('servicio.destroy', $servicio->IdServicio) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('servicio.show', $servicio->IdServicio) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('servicio.edit', $servicio->IdServicio) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
