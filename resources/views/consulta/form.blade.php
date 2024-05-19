<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_consulta" class="form-label">{{ __('Idconsulta') }}</label>
            <input type="text" name="IdConsulta" class="form-control @error('IdConsulta') is-invalid @enderror" value="{{ old('IdConsulta', $consultum?->IdConsulta) }}" id="id_consulta" placeholder="Idconsulta">
            {!! $errors->first('IdConsulta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $consultum?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_hora" class="form-label">{{ __('Fechahora') }}</label>
            <input type="text" name="FechaHora" class="form-control @error('FechaHora') is-invalid @enderror" value="{{ old('FechaHora', $consultum?->FechaHora) }}" id="fecha_hora" placeholder="Fechahora">
            {!! $errors->first('FechaHora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $consultum?->Descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo" class="form-label">{{ __('Costo') }}</label>
            <input type="text" name="Costo" class="form-control @error('Costo') is-invalid @enderror" value="{{ old('Costo', $consultum?->Costo) }}" id="costo" placeholder="Costo">
            {!! $errors->first('Costo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>