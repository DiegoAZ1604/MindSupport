<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_contenido" class="form-label">{{ __('Idcontenido') }}</label>
            <input type="text" name="IdContenido" class="form-control @error('IdContenido') is-invalid @enderror" value="{{ old('IdContenido', $contenidoEdu?->IdContenido) }}" id="id_contenido" placeholder="Idcontenido">
            {!! $errors->first('IdContenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $contenidoEdu?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="titulo" class="form-label">{{ __('Titulo') }}</label>
            <input type="text" name="Titulo" class="form-control @error('Titulo') is-invalid @enderror" value="{{ old('Titulo', $contenidoEdu?->Titulo) }}" id="titulo" placeholder="Titulo">
            {!! $errors->first('Titulo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $contenidoEdu?->Descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_contenido" class="form-label">{{ __('Tipocontenido') }}</label>
            <input type="text" name="TipoContenido" class="form-control @error('TipoContenido') is-invalid @enderror" value="{{ old('TipoContenido', $contenidoEdu?->TipoContenido) }}" id="tipo_contenido" placeholder="Tipocontenido">
            {!! $errors->first('TipoContenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="contenido" class="form-label">{{ __('Contenido') }}</label>
            <input type="text" name="Contenido" class="form-control @error('Contenido') is-invalid @enderror" value="{{ old('Contenido', $contenidoEdu?->Contenido) }}" id="contenido" placeholder="Contenido">
            {!! $errors->first('Contenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>