<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <!--Dropdown User ID-->
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('Usuario') }}</label>
            <select name="user_id" class="form-control @error('user_id') is-invalid @enderror" id="user_id" style="color: black">
                <option value="">{{ __('Selecciona un Usuario') }}</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ old('user_id', $servicio?->user_id) == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!--Dropdown Contenido ID-->
        <div class="form-group mb-2 mb20">
            <label for="IdContenido" class="form-label">{{ __('Titulo del Contenido') }}</label>
            <select name="IdContenido" class="form-control @error('IdContenido') is-invalid @enderror" id="IdContenido" style="color: black">
                <option value="">{{ __('Selecciona un Contenido') }}</option>
                @foreach($contenidoEdu as $contenido)
                    <option value="{{ $contenido->IdContenido }}" {{ old('IdContenido', $servicio?->IdContenido) == $contenido->IdContenido ? 'selected' : '' }}>
                        {{ $contenido->Titulo }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('IdContenido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!--Dropdown Consulta ID-->
        <div class="form-group mb-2 mb20">
            <label for="IdConsulta" class="form-label">{{ __('Consulta') }}</label>
            <select name="IdConsulta" class="form-control @error('IdConsulta') is-invalid @enderror" id="IdConsulta" style="color: black">
                <option value="">{{ __('Selecciona una Consulta') }}</option>
                @foreach($consulta as $consultaItem)
                    <option value="{{ $consultaItem->IdConsulta }}" {{ old('IdConsulta', $servicio?->IdConsulta) == $consultaItem->IdConsulta ? 'selected' : '' }}>
                        {{ $consultaItem->Descripcion }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('IdConsulta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!--Input Costo-->
        <div class="form-group mb-2 mb20">
            <label for="Costo" class="form-label">{{ __('Costo') }}</label>
            <input type="text" name="Costo" class="form-control @error('Costo') is-invalid @enderror" value="{{ old('Costo', $servicio?->Costo) }}" id="costo" placeholder="Costo">
            {!! $errors->first('Costo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
