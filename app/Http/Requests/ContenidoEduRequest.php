<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContenidoEduRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'IdContenido' => 'required',
			'user_id' => 'required',
			'Titulo' => 'required|string',
			'Descripcion' => 'required|string',
			'TipoContenido' => 'required',
			'Contenido' => 'required',
        ];
    }
}
