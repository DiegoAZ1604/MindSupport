<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_servicio" class="form-label">{{ __('Idservicio') }}</label>
            <input type="text" name="IdServicio" class="form-control @error('IdServicio') is-invalid @enderror" value="{{ old('IdServicio', $servicio?->IdServicio) }}" id="id_servicio" placeholder="Idservicio">
            {!! $errors->first('IdServicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $servicio?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_contenido" class="form-label">{{ __('Idcontenido') }}</label>
            <input type="text" name="IdContenido" class="form-control @error('IdContenido') is-invalid @enderror" value="{{ old('IdContenido', $servicio?->IdContenido) }}" id="id_contenido" placeholder="Idcontenido">
            {!! $errors->first('IdContenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_consulta" class="form-label">{{ __('Idconsulta') }}</label>
            <input type="text" name="IdConsulta" class="form-control @error('IdConsulta') is-invalid @enderror" value="{{ old('IdConsulta', $servicio?->IdConsulta) }}" id="id_consulta" placeholder="Idconsulta">
            {!! $errors->first('IdConsulta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo" class="form-label">{{ __('Costo') }}</label>
            <input type="text" name="Costo" class="form-control @error('Costo') is-invalid @enderror" value="{{ old('Costo', $servicio?->Costo) }}" id="costo" placeholder="Costo">
            {!! $errors->first('Costo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>