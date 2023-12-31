<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTarefaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'data' => 'required|date',
            'assunto'=> 'required|min: 2 | max: 50',
            'descricao'=> 'required|min: 2 | max: 250',
            'realizado'=> 'required|boolean',
            'tipo_id'=> 'required|numeric',
        ];
    }
}
