@extends('layouts.app')

@section('template_title')
    Calificacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-white">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Calificacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('calificacion.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                    <div class="card-body text-white">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" style="border-color: white;">
                                <thead class="thead">
                                    <tr>

									<th >ID de Servicio</th>
									<th >Puntuacion</th>
									<th >Comentario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($calificacion as $calificacion)
                                        <tr>
										<td >{{ $calificacion->IdServicio }}</td>
										<td >{{ $calificacion->Puntuacion }}</td>
										<td >{{ $calificacion->Comentario }}</td>

                                            <td>
                                                <form action="{{ route('calificacion.destroy', $calificacion->IdCalificacion) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('calificacion.show', $calificacion->IdCalificacion) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('calificacion.edit', $calificacion->IdCalificacion) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
