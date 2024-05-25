<form action="{{ route('contenido-edu.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row padding-1 p-1">
        <div class="col-md-12">

            <!--Dropdown User ID-->
            <div class="form-group mb-2 mb20">
                <label for="user_id" class="form-label">{{ __('Usuario') }}</label>
                <select name="user_id" class="form-control @error('user_id') is-invalid @enderror" id="user_id" style="color: black">
                    <option value="">{{ __('Select a user') }}</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id', $contenidoEdu?->user_id) == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
                <input type="text" name="Titulo" class="form-control @error('Titulo') is-invalid @enderror" value="{{ old('Titulo', $contenidoEdu?->Titulo) }}" id="titulo" placeholder="Titulo" style="color: black">
                {!! $errors->first('Titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
                <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $contenidoEdu?->Descripcion) }}" id="descripcion" placeholder="Descripcion" style="color: black">
                {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="tipo_contenido" class="form-label">{{ __('Tipo de Contenido') }}</label>
                <select name="TipoContenido" class="form-control @error('TipoContenido') is-invalid @enderror" id="tipo_contenido" style="color: black">
                    <option value="texto" {{ old('TipoContenido', $contenidoEdu?->TipoContenido) == 'texto' ? 'selected' : '' }}>Texto</option>
                    <option value="audio" {{ old('TipoContenido', $contenidoEdu?->TipoContenido) == 'audio' ? 'selected' : '' }}>Audio</option>
                    <option value="video" {{ old('TipoContenido', $contenidoEdu?->TipoContenido) == 'video' ? 'selected' : '' }}>Video</option>
                    <option value="enlace" {{ old('TipoContenido', $contenidoEdu?->TipoContenido) == 'enlace' ? 'selected' : '' }}>Enlace</option>
                    <option value="archivo" {{ old('TipoContenido', $contenidoEdu?->TipoContenido) == 'archivo' ? 'selected' : '' }}>Archivo</option>
                </select>
                {!! $errors->first('TipoContenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
            <div class="form-group mb-2 mb20">
                <label for="contenido" class="form-label">{{ __('Contenido') }}</label>
                <input type="file" name="Contenido" class="form-control @error('Contenido') is-invalid @enderror" id="contenido">
                {!! $errors->first('Contenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>
        <div class="col-md-12 mt20 mt-2">
            <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        </div>
    </div>
</form>
