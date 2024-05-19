<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_calificacion" class="form-label">{{ __('Idcalificacion') }}</label>
            <input type="text" name="IdCalificacion" class="form-control @error('IdCalificacion') is-invalid @enderror" value="{{ old('IdCalificacion', $calificacion?->IdCalificacion) }}" id="id_calificacion" placeholder="Idcalificacion">
            {!! $errors->first('IdCalificacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_servicio" class="form-label">{{ __('Idservicio') }}</label>
            <input type="text" name="IdServicio" class="form-control @error('IdServicio') is-invalid @enderror" value="{{ old('IdServicio', $calificacion?->IdServicio) }}" id="id_servicio" placeholder="Idservicio">
            {!! $errors->first('IdServicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="puntuacion" class="form-label">{{ __('Puntuacion') }}</label>
            <input type="text" name="Puntuacion" class="form-control @error('Puntuacion') is-invalid @enderror" value="{{ old('Puntuacion', $calificacion?->Puntuacion) }}" id="puntuacion" placeholder="Puntuacion">
            {!! $errors->first('Puntuacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="comentario" class="form-label">{{ __('Comentario') }}</label>
            <input type="text" name="Comentario" class="form-control @error('Comentario') is-invalid @enderror" value="{{ old('Comentario', $calificacion?->Comentario) }}" id="comentario" placeholder="Comentario">
            {!! $errors->first('Comentario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>