<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormularioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'modelo' => 'required|string|',
            'trato' => 'required',
            'nombre' => 'required',
            'apellido1' => 'required',
            'email' => 'required|email',
            'movil' => 'required|numeric',
            'provincia_id' => 'required|numeric|exists:provincias,id',
            'concesion_id' => 'required|numeric|exists:concesiones,id',
            'policies' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'modelo.required' => 'Introducir el modelo es obligatorio',
            'trato.required' => 'Introducir el trato es obligatorio',
            'nombre.required' => 'Introducir el nombre es obligatorio',
            'apellido1.required' => 'Introducir el primer apellido es obligatorio',
            'email.required' => 'Introducir el email es obligatorio',
            'movil.required' => 'Introducir el móvil obligatorio',
            'provincia_id.required' => 'Introducir la provincia es obligatorio',
            'concesion_id.required' => 'Introducir la concesión es obligatorio',
            'policies.required' => 'Marcar la casilla es obligatorio'
        ];
    }
}
