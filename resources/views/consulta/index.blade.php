@extends('layouts.app')

@section('template_title')
    Consulta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-white">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consulta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consulta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                        <div class="table-responsive" >
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
									<th >Nombre De Usuario</th>
									<th >Fecha y Hora</th>
									<th >Descripcion</th>
									<th >Costo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consulta as $consulta)
                                        <tr>
										<td >{{ $consulta->user->name }}</td>
										<td >{{ $consulta->FechaHora }}</td>
										<td >{{ $consulta->Descripcion }}</td>
										<td >{{ $consulta->Costo }}</td>

                                            <td>
                                                <form action="{{ route('consulta.destroy', $consulta->IdConsulta) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consulta.show', $consulta->IdConsulta) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consulta.edit', $consulta->IdConsulta) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
