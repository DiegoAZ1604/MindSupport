<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User') }}</label>
            <select name="user_id" class="form-control @error('user_id') is-invalid @enderror" id="user_id">
                <option value="">{{ __('Select a user') }}</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id', $consulta?->user_id) == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_hora" class="form-label">{{ __('Fecha y Hora') }}</label>
            <input type="datetime-local" name="FechaHora" class="form-control @error('FechaHora') is-invalid @enderror" value="{{ old('FechaHora', $consulta?->FechaHora) }}" id="fecha_hora" placeholder="Fecha y Hora">
            {!! $errors->first('FechaHora', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="Descripcion" class="form-control @error('Descripcion') is-invalid @enderror" value="{{ old('Descripcion', $consulta?->Descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('Descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo" class="form-label">{{ __('Costo') }}</label>
            <input type="text" name="Costo" class="form-control @error('Costo') is-invalid @enderror" value="{{ old('Costo', $consulta?->Costo) }}" id="costo" placeholder="Costo">
            {!! $errors->first('Costo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
