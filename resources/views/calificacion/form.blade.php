<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="id_servicio" class="form-label">{{ __('ID de Servicio') }}</label>
            <select name="IdServicio" class="form-control @error('IdServicio') is-invalid @enderror" id="id_servicio" style="color: black">
                <option value="">{{ __('Selecciona un Servicio') }}</option>
                @foreach($servicios as $servicio)
                    <option value="{{ $servicio->
                    IdServicio }}" {{ old('IdServicio', $servicio?->IdServicio) == $servicio->IdServicio ? 'selected' : '' }}>
                        {{ $servicio->IdServicio }}
                    </option>
                @endforeach
            </select>
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
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>