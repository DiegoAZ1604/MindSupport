@extends('layouts.app')

@section('template_title')
    Contenido Edus
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-white">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contenido Educativo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contenido-edu.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
									<th >Nombre de Usuario</th>
									<th >Titulo</th>
									<th >Descripcion</th>
									<th >Tipo de Contenido</th>
									<th >Contenido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contenidoEdu as $contenidoEdu)
                                        <tr>
                                            
                                            
										<td >{{ $contenidoEdu->user->name }}</td>
										<td >{{ $contenidoEdu->Titulo }}</td>
										<td >{{ $contenidoEdu->Descripcion }}</td>
										<td >{{ $contenidoEdu->TipoContenido }}</td>
										<td>
                                            @if ($contenidoEdu->TipoContenido == 'enlace')
                                                <a href="{{ $contenidoEdu->Contenido }}" target="_blank">{{ __('Ver Link') }}</a>
                                            @elseif (in_array($contenidoEdu->TipoContenido, ['texto', 'audio', 'video']))
                                                <a href="{{ asset('storage/app/uploads/' . $contenidoEdu->Contenido) }}" target="_blank">Download File</a>
                                            @else
                                                {{ __('Unknown Content Type') }}
                                            @endif
                                        </td>
                                        

                                            <td>
                                                <form action="{{ route('contenido-edu.destroy', $contenidoEdu->IdContenido) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contenido-edu.show', $contenidoEdu->IdContenido) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contenido-edu.edit', $contenidoEdu->IdContenido) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
