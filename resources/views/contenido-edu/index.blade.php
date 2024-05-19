@extends('layouts.app')

@section('template_title')
    Contenido Edus
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contenido Edus') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contenido-edus.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Idcontenido</th>
									<th >User Id</th>
									<th >Titulo</th>
									<th >Descripcion</th>
									<th >Tipocontenido</th>
									<th >Contenido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contenidoEdus as $contenidoEdu)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $contenidoEdu->IdContenido }}</td>
										<td >{{ $contenidoEdu->user_id }}</td>
										<td >{{ $contenidoEdu->Titulo }}</td>
										<td >{{ $contenidoEdu->Descripcion }}</td>
										<td >{{ $contenidoEdu->TipoContenido }}</td>
										<td >{{ $contenidoEdu->Contenido }}</td>

                                            <td>
                                                <form action="{{ route('contenido-edus.destroy', $contenidoEdu->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contenido-edus.show', $contenidoEdu->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contenido-edus.edit', $contenidoEdu->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $contenidoEdus->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
