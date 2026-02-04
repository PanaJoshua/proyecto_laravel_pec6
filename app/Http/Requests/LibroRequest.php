<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
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
            'titulo' => 'required|min:5',
            'editorial' => 'required|min:5',
            'precio' => 'required|numeric|min:0.01',
            'año_publicacion' => 'required|min:4',
            'descripcion' => 'required|min:50',
            'desarrollador_id' => 'exists:App\Models\Desarrollador,id'
        ];
    }

    public function messages() {
        return [
            'titulo.required' => 'El titulo es obligatorio',
            'titulo.min' => 'El tamaño del titulo debe ser minimo 5',
            'editorial.required' => 'El contenido es obligatorio',
            'editorial.min' => 'El tamaño del contenido debe ser minimo 5',
            'precio.required' => 'El precio es obligatorio',
            'precio.min' => 'El tamaño del precio debe ser minimo 1',
            'año_publicacion.required' => 'El año de publicación es obligatorio',
            'año_publicacion.min' => 'El tamaño del año de publicacion debe ser minimo 4',
            'descripcion.required' => 'La descripcion es obligatoria',
            'descripcion.min' => 'El tamaño de la descripcion debe ser minimo 50',
        ];
    }
}
